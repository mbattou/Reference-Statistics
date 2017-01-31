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
        return view('welcome')->withPosts($posts);//passing post table data to view
      //return view('welcome', ['posts'=> $posts]);//another way to pass an aray of json data
    }
    public function getOndesk(){
    //load the drop down from the DB
        $locations = Location::all();
        return view('ondesk')->withLocations($locations);
    }
    public function getOffdesk(){
    //load the drop down from the DB
        $locations = Location::all();
        return view('offdesk')->withLocations($locations);
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
        $data = new Post;
        $data->category = $request['category'];
       // $data->subcategory = $request['subcategory']; //for a later use, not neede for current requirements
        $data->location = $request['location'];
        $data->code = $request['code'];
        $data->save();
        //return $request['category']."|".$request['location'];
        return 'Data saved!!';
    }
    public function setCookie(Request $request){
        $name = 'LocationCookie';
        $value = $request['location'];
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
