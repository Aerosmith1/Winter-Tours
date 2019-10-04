<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use Session;
use Validator;


class RegionController extends Controller
{
   
    public function __construct(){


  $this->middleware('auth');
    $this->middleware('admin');
}


    public function index(){
		
		return view('regions.index');
		
	}


	public function create(){

		return view('regions.create');

	}


    public function edit($id){


    	$regions=Region::findorfail($id);
    	return view('regions.edit')->with('regions',$regions);
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


    public function update(Request $request,$id){


		$validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:255',
        ]);

	$region=Region::findorfail($id);

        if ($validator->fails()) {
            return redirect('regions/'.$region->id.'/edit')
                        ->withErrors($validator)
                        ->withInput();
        }


        
        $region->name=$request->input('name');
        $region->save();

        Session::flash('region_update', 'region is updated');

          return redirect('regions/'.$region->id.'/edit');

    }

    public function destroy($id){

    	$region=Region::findorfail($id);
    	$region->delete();
    	 return redirect('hotels');

    }


}
