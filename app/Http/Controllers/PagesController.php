<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//new imports
use App\Post; //call the Post model
use App\Location; //call the Location Model
use Illuminate\Http\Request;//using Http request

class PagesController extends Controller{
/*
*Get Functions
*/       
    public function getIndex(){
        $posts = Post::all();
        $locations = Location::all();
        return view('welcome')->withPosts($posts)->withLocations($locations);
      //return view('welcome', ['posts'=> $posts]);//another way to pass an aray of json data
    }
    public function getOndesk(){
        return view('ondesk');
    }
    public function getOffdesk(){
        return view('offdesk');
    }
    public function getReport(){
        return view('report');
    }
    public function getContact(){
        $email = 'bibnet@uottawa.ca';
        $admin = "Library Systems";
        $data = [];
        $data['email'] = $email;
        $data['admin'] = $admin;
        return view('contact')->withData($data);
    }
    public function getAbout(){
        return view('about');
    }
    public function getDemo(){
        return view('demo');
    }
    public function getDash(){
      //  return view('dash');
        return view('dash');
    }
    public function getData(){
        return view('post');
    }
    public function getSample(){
        //a sample a statistical view
        return view('sample');
    }
    public function getTest(){
        return view('test');
        //return response('test')->cookie($cookie);
    }
/*
*Post Functions
*/    
    public function store(Request $request){
        //return $request->all();
        $name = 'LocationCookie';
        $value = $request -> cookie($name);
        $data = new Post;
        $data->category = $request['category'];
       // $data->subcategory = $request['subcategory']; //for a later use, not neede for current requirements
       // $data->location = $request['location'];
        $data->location = $value;
        $data->code = $request['code'];
        $data->save();
        //return $request['category']."|".$request['location'];
        return 'Data saved!!';
    }
    public function setCookie(Request $request){
        $name = 'LocationCookie';
        //if you are getting the value from input box simply use: $value = $request['location'] where location is the name of the input field
        $value = $request->input('locationID');
        $life = 60; 
        $cookie = cookie($name,$value,$life);
        return response()->view('gloup')->withCookie($cookie);
    }
/*
*Other functions
*/    
    public function clearCookie(){
        $name = 'LocationCookie';
        $value = 'NuLL';//should be replaced
        $life = 0;
        $cookie = cookie($name,$value,$life);
        return response('Cookie cleared!!')->withCookie($cookie);
    }
}
