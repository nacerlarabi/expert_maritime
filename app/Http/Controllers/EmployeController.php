<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Excel;
use PDF;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Listing;
use App\Rapport;

class EmployeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:employe');
    }

    
     public function index()
    {
        return view('employe.layout');
    }


     public function listing()
    {
    	 $listing=Listing::all();
        return view('employe.listing',['listing'=>$listing]);
    }


     public function importListing(Request $request)
    {
        $file= $request->file('fichier');
        
        $file_name= $file->getClientOriginalName();
        $file->move('files',$file_name);
        $results=Excel::load('files/'.$file_name,function($reader)
        {
        	$reader->noHeading()->all();
            

        }, 'UTF-8')->get();

 		
        $l= new Listing;
        $l->fichier=$file_name;
		$l->user_id=2;
        $l->navire=substr ( $results[0][5][0], 9 );
        $l->nombre_conteneur=(count( $results[0])-11).'TCs';
        $l->gros=Input::get('gros');
        $l->quai=substr ( $results[0][8][3], 6 ); 
        
        $l->save();
       
        

         return redirect()->back();
    }



    public function gererRapport(Listing $listing)
    {

    	$results=Excel::load('files/'.$listing->fichier,function($reader)
        {
        	$reader->noHeading()->all();
            

        }, 'UTF-8')->get();

    	

        return view('employe.gererRapport',compact('listing'),['liste'=>$results]);
    }



    public function ajouterRapport(Listing $listing,Request $request)
    {

    	
    	
    	if ((Rapport::where([
                ['test', '=',0],
                ['listing_id', '=', $listing->id],
                
                ])->count() <20))
    	{

    	$rapport= new Rapport;
    	$rapport->listing_id=$listing->id;
    	$rapport->tcs=Input::get('tcs');
    	$rapport->art=Input::get('art');
    	$rapport->type=Input::get('type');
    	$rapport->etat_scelle=Input::get('etat');
    	$rapport->mat_camion=Input::get('mat_camion');
    	$rapport->observation=Input::get('observation');
    	$rapport->save();

    	}


    	if(Rapport::where([
                ['test', '=',0],
                ['listing_id', '=', $listing->id],
                
                ])->count() ==20)
    	{return redirect('/employe/listing/$listing->id/genererRapport');}


    	return redirect()->back();

    }


    public function genererRapport(Listing $listing)
    {
    	
    	$list=Rapport::where([
                ['test', '=',0],
                ['listing_id', '=', $listing->id],
                
                ])->get();

    	
    	$pdf= PDF::loadView('employe.rapport',compact('listing'),['list'=>$list]);

    	$name='rapport '.$listing->navire;

    	$list=Rapport::where([
                ['test', '=',0],
                ['listing_id', '=', $listing->id],
                
                ])->get();

    	
    	return $pdf->download($name);

    }
}
