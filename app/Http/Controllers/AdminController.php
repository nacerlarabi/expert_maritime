<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Excel;
use PDF;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Employe;
use App\Listing;
use App\Rapport;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.layout');
    }

    public function recu(){
    	return view('admin.layout');
    }
    public function transferes(){
    	return view('admin.layout');
    }
    public function port(){
    	$employes=Employe::all();
        return view('admin.port',['employes'=>$employes]);
    }
    public function port_sec(){
    	return view('admin.layout');
    }
    public function clients(){
    	return view('admin.layout');
    }
    public function persos(){
    	return view('admin.layout');
    }
    public function interchanges(){
    	return view('admin.layout');
    }

    public function listing()
    {
    	$listing=Listing::all();
        return view('admin.listing',['listing'=>$listing]);
    }

    public function insererEmploye(Request $request){

        $emp=new Employe;
        $emp->username=Input::get('username');
        $emp->nom=Input::get('nom');
        $emp->prenom=Input::get('prenom');
        $emp->email=Input::get('username');

    }

}
