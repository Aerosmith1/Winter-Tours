<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;

class RegionController extends Controller
{
    public function index(){
		
		return view('regions.index');
		
	}


	public function create(){

		return view('regions.create');

	}


    public function edit($id){


    	$regions=Region::findorfail($id);
    	return view('regions.edit')->with($regions);
    }
}
