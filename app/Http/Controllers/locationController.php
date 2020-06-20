<?php

namespace App\Http\Controllers;
use App\Models\Location;
use App\Models\Vente;
use app\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class locationController extends Controller
{


	public function index(){
        $location = DB::table('locations')->orderBy('id','desc')->get();
        return view('location',['locations' => $location]);
    }
    public function indexw(){
        $location = DB::table('locations')->whereNotNull('name');
        $vente = DB::table('ventes')->whereNotNull('name')->union($location)->orderBy('id','desc')->get();
        return view('welcome', ['ventes'=> $vente]);   
     }

    public function search(Request $request){
    	$search=$request->get('search');
        $searchch=$request->get('chambre');
        $searchcui=$request->get('cuisine');
        $searchsa=$request->get('salon');
        $searchba=$request->get('bain');
    	$location = DB::table('locations')->where('name', 'like' ,'%' . $search . '%')->where('chambre', $searchch)->where('cuisine', $searchcui)->where('salon', $searchsa)->where('bain', $searchba)->get();
    	return view('location', ['locations'=> $location]);
    }
    

    public function seaarch(Request $request){
        $search=$request->get('seaarch');
        $searchch=$request->get('chambre');
        $searchcui=$request->get('cuisine');
        $searchsa=$request->get('salon');
        $searchba=$request->get('bain');
        $location = DB::table('locations')->where('name', 'like' ,'%' . $search . '%')->where('chambre', $searchch)->where('cuisine', $searchcui)->where('salon', $searchsa)->where('bain', $searchba);
        $vente = DB::table('ventes')->where('name', 'like' ,'%' . $search . '%')->where('chambre', $searchch)->where('cuisine', $searchcui)->where('salon', $searchsa)->where('bain', $searchba)->union($location)->get();
        return view('welcome', ['ventes'=> $vente]); 
    }


    public function show($id){

        $location = DB::table('locations')->where('id',$id)->first();
        return view('article',['location' => $location]);
    }
    



    public function toutmaison(Request $request){
        $location = DB::table('locations')->where('type', 'maison');
        $vente = DB::table('ventes')->where('type', 'maison')->union($location)->get();
        return view('welcome', ['ventes'=> $vente]);
    }
    public function toutvilla(Request $request){
        $location = DB::table('locations')->where('type', 'villa');
        $vente = DB::table('ventes')->where('type', 'villa')->union($location)->get();
        return view('welcome', ['ventes'=> $vente]);
    }
    public function toutterrain(Request $request){
        $location = DB::table('locations')->where('type', 'terrain');
        $vente = DB::table('ventes')->where('type', 'terrain')->union($location)->get();
       return view('welcome', ['ventes'=> $vente]);
    }
    public function toutrestaurant(Request $request){
        $location = DB::table('locations')->where('type', 'restaurant');
        $vente = DB::table('ventes')->where('type', 'restaurant')->union($location)->get();
        return view('welcome', ['ventes'=> $vente]);
    }
     public function toutgarage(Request $request){
        $location = DB::table('locations')->where('type', 'garage');
        $vente = DB::table('ventes')->where('type', 'garage')->union($location)->get();
        return view('welcome', ['ventes'=> $vente]);
    }
     public function toutusine(Request $request){
        $location = DB::table('locations')->where('type', 'usine');
        $vente = DB::table('ventes')->where('type', 'usine')->union($location)->get();
        return view('welcome', ['ventes'=> $vente]);
    }
     public function toutmagasin(Request $request){
        $location = DB::table('locations')->where('type', 'magasin');
        $vente = DB::table('ventes')->where('type', 'magasin')->union($location)->get();
        return view('welcome', ['ventes'=> $vente]);
    }
     public function toutbureau(Request $request){
        $location = DB::table('locations')->where('type', 'bureau');
        $vente = DB::table('ventes')->where('type', 'bureau')->union($location)->get();
        return view('welcome', ['ventes'=> $vente]);
    }




    public function maison(Request $request){
    	$location = DB::table('locations')->where('type', 'maison')->paginate(5);
    	return view('location', ['locations'=> $location]);
    }

    public function villa(Request $request){
    	$location = DB::table('locations')->where('type', 'villa')->paginate(5);
    	return view('location', ['locations'=> $location]);
    }

     public function terrain(Request $request){
    	$location = DB::table('locations')->where('type', 'terrain')->paginate(5);
    	return view('location', ['locations'=> $location]);
    }
     public function restaurant(Request $request){
    	$location = DB::table('locations')->where('type', 'restaurant')->paginate(5);
    	return view('location', ['locations'=> $location]);
    }
     public function garage(Request $request){
    	$location = DB::table('locations')->where('type', 'garage')->paginate(5);
    	return view('location', ['locations'=> $location]);
    }
     public function usine(Request $request){
    	$location = DB::table('locations')->where('type', 'usine')->paginate(5);
    	return view('location', ['locations'=> $location]);
    }
     public function magasin(Request $request){
    	$location = DB::table('locations')->where('type', 'magasin')->paginate(5);
    	return view('location', ['locations'=> $location]);
    }
     public function bureau(Request $request){
    	$location = DB::table('locations')->where('type', 'bureau')->paginate(5);
    	return view('location', ['locations'=> $location]);
    }
     

}
