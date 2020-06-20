<?php

namespace App\Http\Controllers;
use App\Models\Vente;
use App\Models\Location;
use App\Models\Nonvalid;
use Illuminate\Http\UploadedFile;
use App\User;

use\Input as Input;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class achatController extends Controller
{
    public function index(){
        $vente = DB::table('ventes')->orderBy('id','desc')->get();
        return view('vente',['ventes' => $vente]);
    }
    
    public function bur(){
        return view('bureaux')->with('ventes', Vente::where('bureau',$type)->first());
    }

    public function seearch(Request $request){
        $search=$request->get('searchvente');
        $searchch=$request->get('chambre');
        $searchcui=$request->get('cuisine');
        $searchsa=$request->get('salon');
        $searchba=$request->get('bain');
        $vente = DB::table('ventes')->where('name', 'like' ,'%' . $search . '%')->orWhere('chambre', $searchch)->orWhere('cuisine', $searchcui)->orWhere('salon', $searchsa)->orWhere('bain', $searchba)->get();
        return view('vente', ['ventes'=> $vente]);
    }
    
    public function search(Request $request){
        $search=$request->get('searchvente');
        $vente = DB::table('ventes')->where('name', 'like' ,'%' . $search . '%')->paginate(5);
        return view('vente', ['ventes'=> $vente]);
    }
   
    public function maison(Request $request){
        $vente = DB::table('ventes')->where('type', 'maison')->paginate(5);
        return view('vente', ['ventes'=> $vente]);
    }

    public function villa(Request $request){
        $vente = DB::table('ventes')->where('type', 'villa')->paginate(5);
        return view('vente', ['ventes'=> $vente]);
    }

     public function terrain(Request $request){
        $vente = DB::table('ventes')->where('type', 'terrain')->paginate(5);
        return view('vente', ['ventes'=> $vente]);
    }
     public function restaurant(Request $request){
        $vente = DB::table('ventes')->where('type', 'restaurant')->paginate(5);
        return view('vente', ['ventes'=> $vente]);
    }
     public function garage(Request $request){
        $vente = DB::table('ventes')->where('type', 'garage')->paginate(5);
        return view('vente', ['ventes'=> $vente]);
    }
     public function usine(Request $request){
        $vente = DB::table('ventes')->where('type', 'usine')->paginate(5);
        return view('vente', ['ventes'=> $vente]);
    }
     public function magasin(Request $request){
        $vente = DB::table('ventes')->where('type', 'magasin')->paginate(5);
        return view('vente', ['ventes'=> $vente]);
    }
     public function bureau(Request $request){
        $vente = DB::table('ventes')->where('type', 'bureau')->paginate(5);
        return view('vente', ['ventes'=> $vente]);
    }
     public function showv($id){
        
        return view('articlevente',['vente' => $vente]);  
     }
    public function showw($id, $a){
        if($a == 'vendre'){
            $vente = DB::table('ventes')->where('id',$id)->first();
            return view('articlevente',['vente' => $vente]);
        }
        else{
            $location = DB::table('locations')->where('id',$id)->first();
        return view('article',['location' => $location]);
        }

     }     
   
    public function store(Request $request){
        
        $nonvalid = new Nonvalid();
        $nonvalid->a = $request->input('a');
    	$nonvalid->name = $request->input('name');
    	$nonvalid->type= $request->input('type');
    	$nonvalid->prix=$request->input('prix');
    	$nonvalid->chambre=$request->input('chambre');
        $nonvalid->cuisine = $request->input('cuisine');
        $nonvalid->bain = $request->input('bain');
        $nonvalid->salon = $request->input('salon');
        $nonvalid->surface=$request->input('surface');
        $nonvalid->description=$request->input('description');
        $nonvalid->tel=$request->input('tel');
        $nonvalid->email=$request->input('email');
        
        if(request()->hasFile('file')){
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/images/', $filename);
            $nonvalid->image = $filename;
        }
        else{
            return $request;
            $nonvalid->image = '';
        }

    	$nonvalid->save();
        
        $location = DB::table('locations')->whereNotNull('name');
        $vente = DB::table('ventes')->whereNotNull('name')->union($location)->orderBy('id','desc')->get();
        return view('welcome', ['ventes'=> $vente]);   
    }
    public function valider($id){
        $request = DB::table('nonvalids')->where('id',$id)->first();
       

        if($request->a=="vendre"){
        $vente = new Vente();
        $vente->a = $request->a;
        $vente->name = $request->name;
        $vente->type= $request->type;
        $vente->prix=$request->prix;
        $vente->chambre=$request->chambre;
        $vente->cuisine = $request->cuisine;
        $vente->bain = $request->bain;
        $vente->salon = $request->salon;
        $vente->surface=$request->surface;
        $vente->description=$request->description;
        $vente->tel=$request->tel;
        $vente->email=$request->email;
        $vente->image = $request->image;
        
        $vente->save();
        Nonvalid::find($id)->delete();
        $vente = DB::table('ventes')->orderBy('id','desc')->get();
        return view('vente',['ventes' => $vente]);
       }

        else{
        $location = new Location();
        $location->a = $request->a;
        $location->name = $request->name;
        $location->type= $request->type;
        $location->prix=$request->prix;
        $location->chambre=$request->chambre;
        $location->cuisine=$request->cuisine;
        $location->bain=$request->bain;
        $location->salon=$request->salon;
        $location->surface=$request->surface;
        $location->description=$request->description;
        $location->tel=$request->tel;
        $location->email=$request->email;
        $location->image = $request->image;
        
        $location->save();
        Nonvalid::find($id)->delete();
        $location = DB::table('locations')->orderBy('id','desc')->get();
        return view('location',['locations' => $location]);
        }

    }

    public function supprimer($id){
         Nonvalid::find($id)->delete();
         $location = DB::table('locations')->whereNotNull('name');
        $vente = DB::table('ventes')->whereNotNull('name')->union($location)->orderBy('id','desc')->get();
        return view('welcome', ['ventes'=> $vente]); 
    }

public function profil($id){
         $user = User::find($id);
         return view('profil', ['users'=> $user]);
             } 
}