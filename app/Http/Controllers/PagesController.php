<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Post; //using the post model

class PagesController extends Controller{
    public function getIndex(){
        $posts = Post::all();
        //show the data here
        return view('welcome')->withPosts($posts);//passing post table data to view
      //return view('welcome', ['posts'=> $posts]);
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
        //return view('contact')->withEmail($email);
        return view('contact')->withData($data);
    }
    public function getAbout(){
        return view('about');
    }
    public function getDemo(){
        return view('demo');
    }
    public function getDash(){
        return view('dash');
    }
}
