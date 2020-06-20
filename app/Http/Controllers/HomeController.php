<?php

namespace App\Http\Controllers;
use App\Models\Nonvalid;
use App\Models\Vente;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Foundation\Auth\User as Authenticatable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function nonvalid(){
         
         $nonvalid = DB::table('nonvalids')->orderBy('id','desc')->get();
        return view('nonvalid',['nonvalids' => $nonvalid]);
    }

    public function profil($id){
        return view('home');
    }
   

}
