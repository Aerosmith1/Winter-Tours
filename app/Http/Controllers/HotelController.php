<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use Session;
use Validator;


class HotelController extends Controller
{  
	public function index(){

  $regions=Region::all();
  return view('hotels.index')->with('regions',$regions);


	}

	public function store(Request $request){


		$validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('regions/create')
                        ->withErrors($validator)
                        ->withInput();
        }


        $region=new Region;
        $region->name=$request->name;
        $region->save();

        Session::flash('region_create', 'region is created');

          return redirect('regions/create');


	}




}
