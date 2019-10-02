<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Hotel;
use Session;
use Validator;


class HotelController extends Controller
{  
	public function index(){

  $regions=Region::all();
    $hotels=Hotel::all();
  return view('hotels.main')->with('regions',$regions)->with('hotels',$hotels);


	}


    
   /* public function show($id) {
    return view('hotels.main', ['hotels' => Hotel::findOrFail($id)]);

	}*/

	public function create(){

		
        $regions=array();

        foreach(Region::all() as $region){


        	$regions[$region->id]=$region->name;
        }

		return view('hotels.create')->with('regions',$regions);

	}


	    public function store(Request $request){


		$validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:255',
            'region_id'=>'required|integer',
            'description'=>'required|min:50',
            'image'=>'required|mimes:jpg,jpeg,png,gif',
        ]);

        if ($validator->fails()) {
            return redirect('hotels/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $image=$request->file('image');
        $upload='img/hotel/';
        $filename=time().$image->getClientOriginalName();
        $path=move_uploaded_file($image->getPathName(), $upload.$filename);

        $hotel=new Hotel;
        $hotel->name=$request->name;
        $hotel->region_id=$request->region_id;
        $hotel->description=$request->description;
        $hotel->image=$filename;
        $hotel->save();

        Session::flash('hotel_create', 'hotel is created');

          return redirect('hotels/create');


	}


	public function edit($id){


    	$hotels=Hotel::findorfail($id);

    	    $regions=array();

        foreach(Region::all() as $region){


        	$regions[$region->id]=$region->name;
        }

    	return view('hotels.edit')->with('hotels',$hotels)->with('regions',$regions);
    }





    public function update(Request $request,$id){


		$validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:255',
            'region_id'=>'required|integer',
            'description'=>'required|min:50',
            'image'=>'required|mimes:jpg,jpeg,png,gif',
        ]);

         $hotel=Hotel::findOrfail($id);

        if ($validator->fails()) {
            return redirect('hotels/'.$hotel->id.'/edit')
                        ->withErrors($validator)
                        ->withInput();
        }

        if($request->file('image')!=""){
        $image=$request->file('image');
        $upload='img/hotel/';
        $filename=time().$image->getClientOriginalName();
        $path=move_uploaded_file($image->getPathName(), $upload.$filename);
    		}
       
        $hotel->name=$request->input('name');
        $hotel->region_id=$request->region_id;
        $hotel->description=$request->input('description');
        if(isset($filename)){
        $hotel->image=$filename;}
        $hotel->save();

    


        Session::flash('hotel_update', 'hotel is updated');

           return redirect('hotels/'.$hotel->id.'/edit');


	}


	   public function destroy($id){

    	$hotel=Hotel::findorfail($id);
    	$hotel->delete();
    	 return redirect('hotels');

    }



}
