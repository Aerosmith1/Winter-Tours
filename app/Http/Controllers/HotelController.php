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
  return view('hotels.main')->with('regions',$regions);


	}

	




}
