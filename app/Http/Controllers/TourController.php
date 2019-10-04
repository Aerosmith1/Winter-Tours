<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use Session;
use Validator;

class TourController extends Controller
{
    
public function __construct(){


  $this->middleware('auth');
    $this->middleware('admin');
}

 public function index(){
		

		$tours=Tour::all();
		return view('tours.main')->with('tours',$tours);

		}

public function create(){

		return view('tours.create');

	}



	    public function store(Request $request){


		$validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:255',
            'short_desc'=>'required|max:200',
            'description'=>'required|min:50',
            'image'=>'required|mimes:jpg,jpeg,png,gif',
        ]);

        if ($validator->fails()) {
            return redirect('tours/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $image=$request->file('image');
        $upload='img/tour/';
        $filename=time().$image->getClientOriginalName();
        $path=move_uploaded_file($image->getPathName(), $upload.$filename);

       $tours=new Tour;
       $tours->name=$request->name;
       $tours->short_desc=$request->short_desc;
       $tours->description=$request->description;
       $tours->image=$filename;
       $tours->save();

        Session::flash('tour_create', 'tour is created');

          return redirect('tours/create');


	}

public function edit($id){


    	$tour=Tour::findorfail($id);
    	return view('tours.edit')->with('tour',$tour);


}


public function update(Request $request,$id){


		$validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:255',
            'short_desc'=>'required|max:200',
            'description'=>'required|min:50',
            'image'=>'required|mimes:jpg,jpeg,png,gif',
        ]);


       $tour=Tour::findorfail($id);

        if ($validator->fails()) {
            return redirect('tours/'.$tour->id.'/edit')
                        ->withErrors($validator)
                        ->withInput();
        }

        $image=$request->file('image');
        $upload='img/tour/';
        $filename=time().$image->getClientOriginalName();
        $path=move_uploaded_file($image->getPathName(), $upload.$filename);

      
       $tour->name=$request->name;
       $tour->short_desc=$request->short_desc;
       $tour->description=$request->description;
       $tour->image=$filename;
       $tour->save();

        Session::flash('tour_update', 'tour is updated');

          return redirect('tours/'.$tour->id.'/edit');


	}


	   public function destroy($id){

    	$tour=Tour::findorfail($id);
    	$tour->delete();
    	 return redirect('tours');

    }

}
