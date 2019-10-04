<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\Hotel;

class StoreController extends Controller
{
    public function index(){

    	$hotels=Hotel::all();
    	return view ('store.main')->with('hotels',$hotels);
    }

    public function getAbout(){

    	$hotels=Hotel::all();
    	return view ('store.about')->with('hotels',$hotels);

    }

public function getOurTour(){

		$hotels=Hotel::all();
		$tours=Tour::all();
    	return view ('store.ourtour')->with('tours',$tours)->with('hotels',$hotels);

    }

    public function getView($id){

    	$hotels=Hotel::all();
    
		$tours=Tour::findorfail($id);
    	return view ('store.view')->with('tours',$tours)->with('hotels',$hotels);

    }

      public function getHotel($id){

    	$hotels=Hotel::all();
    
		$the_hotel=Hotel::findorfail($id);
    	return view ('store.hotel')->with('hotels',$hotels)->with('the_hotel',$the_hotel);

    }



}
