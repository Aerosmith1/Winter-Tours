<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\Hotel;
use App\Region;

class StoreController extends Controller
{
    public function index(){

    	$regions=Region::all();
    	return view ('store.main')->with('regions',$regions);
    }

    public function getAbout(){

    	$regions=Region::all();
    	return view ('store.about')->with('regions',$regions);

    }

public function getOurTour(){

		$regions=Region::all();
		$tours=Tour::all();
    	return view ('store.ourtour')->with('tours',$tours)->with('regions',$regions);

    }

    public function getView($id){

    	   $regions=Region::all();
    
		$tours=Tour::findorfail($id);
    	return view ('store.view')->with('tours',$tours)->with('regions',$regions);

    }

      public function getHotel($id){

    	   $regions=Region::all();
    
		$the_hotel=Hotel::findorfail($id);
    	return view ('store.hotel')->with('regions',$regions)->with('the_hotel',$the_hotel);

    }



}
