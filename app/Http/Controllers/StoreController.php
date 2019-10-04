<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;

class StoreController extends Controller
{
    public function index(){


    	return view ('store.main');
    }

    public function getAbout(){

    	return view ('store.about');

    }

public function getOurTour(){


		$tours=Tour::all();
    	return view ('store.ourtour')->with('tours',$tours);

    }

    public function getView($id){


		$tours=Tour::findorfail($id);
    	return view ('store.view')->with('tours',$tours);

    }


}
