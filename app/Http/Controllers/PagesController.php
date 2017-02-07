<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//new imports
use App\Post; //call the Post model
use App\Location; //call the Location Model
use App\Cat; //call the Cat Model
use App\Presentation; //call the Presentation Model
use Illuminate\Http\Request;//using Http request
use DB; //multiple records insert

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
        $cats = Cat::all();
        return view('ondesk')->withCats($cats);
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
    public function storeOnDesk(Request $request){
        $cats = Cat::all();
        $name = 'LocationCookie';//cookie name
        $value = $request -> cookie($name);
        $data = new Post;
        $categoryID = $request->input('categoryID');
        $data->category = $categoryID;
       // $data->subcategory = $request['subcategory']; //for a later use, not neede for current requirements
       // $data->location = $request['location'];
        $data->location = $value;
        //$data->code = $request['code'];
        if($value == null || $categoryID == null){
            return view('warning');
        }else {
            $data->save();
        }
        //send the cats to the post view as well to be able to display them
        return view('ondesk')->withCats($cats);
    }
    public function storeOffDesk(Request $request){
//Models
        $posts_data = new Post;
        $posts_data_a = new Post; //new temp model instance
        $posts_data_b = new Post; //new temp model instance
        $posts_data_c = new Post; //new temp model instance
        $presentations_data = new Presentation ;
//cats  A B C      
        $A = 1;
        $B = 2;
        $C = 3;
//cookie
        $name = 'LocationCookie';
        $value = $request -> cookie($name);  
        //used for single DB entry     
        $posts_data->location = $value;
        $posts_data_a->location = $value;
        $posts_data_b->location = $value;
        $posts_data_c->location = $value;
//form
        //$organizer = $request['name-input'];
        $tot_A = $request->input('input-a');
        $tot_B = $request->input('input-b');
        $tot_C = $request->input('input-c');
//exceptions        
        if($value == null){
            return view('warning');
        }elseif (($tot_A == null && $tot_B == null && $tot_C == null) || ($tot_A == 0 && $tot_B == 0 && $tot_C == 0)){
            return view('warning');
        }elseif(($tot_A == null && $tot_B == null && $tot_C != null) || ($tot_A == 0 && $tot_B == 0 && $tot_C != null)){
            if($tot_C > 1){
                for($i=0; $i<$tot_C;$i++){
                    $posts_data_c = new Post; //new temp model instance
                    $posts_data_c->category = $C;
                    $posts_data_c->location = $value;
                    $posts_data_c->save();
                }
            }else{
                $posts_data_c->category = $C;
                $posts_data_c->save();
            }
        }elseif(($tot_A == null && $tot_B != null && $tot_C == null) || ($tot_A == 0 && $tot_B != null && $tot_C == 0)){
            if($tot_B > 1){
                for($i=0; $i<$tot_B;$i++){
                    $posts_data_b = new Post; //new temp model instance
                    $posts_data_b->category = $B;
                    $posts_data_b->location = $value;
                    $posts_data_b->save();
                }
            }else {
                $posts_data_b->category = $B;
                $posts_data_b->save();
            }
        }elseif(($tot_A == null && $tot_B != null && $tot_C != null) || ($tot_A == 0 && $tot_B != null && $tot_C != null)){
            if($tot_B > 1 && $tot_C > 1){
                for($i=0; $i<$tot_B; $i++){
                    $posts_data_b = new Post; //new temp model instance
                    $posts_data_b->category = $B;
                    $posts_data_b->location = $value;
                    $posts_data_b->save();
                }
                for($i=0; $i<$tot_C; $i++){
                    $posts_data_c = new Post; //new temp model instance
                    $posts_data_c->category = $C;
                    $posts_data_c->location = $value;
                    $posts_data_c->save();
                }
            }elseif($tot_B > 1 && $tot_C <= 1){
                for($i=0; $i<$tot_B; $i++){
                    $posts_data_b = new Post; //new temp model instance
                    $posts_data_b->category = $B;
                    $posts_data_b->location = $value;
                    $posts_data_b->save();
                }
                $posts_data_c->category = $C;
                $posts_data_c->save();
            }elseif($tot_B <= 1 && $tot_C > 1){
                for($i=0; $i<$tot_C; $i++){
                    $posts_data_c = new Post; //new temp model instance
                    $posts_data_c->category = $C;
                    $posts_data_c->location = $value;
                    $posts_data_c->save();
                }
                $posts_data_b->category = $B;
                $posts_data_b->save();
            }else {
                $posts_data_b->category = $B;
                $posts_data_b->save();

                $posts_data_c->category = $C;
                $posts_data_c->save();
            }
        }elseif(($tot_A != null && $tot_B == null && $tot_C == null) || ($tot_A != null && $tot_B == 0 && $tot_C == 0)){
            if($tot_A > 1){
                for($i=0; $i<$tot_A; $i++){
                    $posts_data_a = new Post; //new temp model instance
                    $posts_data_a->category = $A;
                    $posts_data_a->location = $value;
                    $posts_data_a->save();
                }
            }else{
                    $posts_data_a->category = $A;
                    $posts_data_a->save();
            }
        }elseif(($tot_A != null && $tot_B == null && $tot_C != null) || ($tot_A != null && $tot_B == 0 && $tot_C != null)){
            if($tot_A > 1 && $tot_C > 1){
                for($i=0; $i<$tot_A; $i++){
                    $posts_data_a = new Post; //new temp model instance
                    $posts_data_a->category = $A;
                    $posts_data_a->location = $value;
                    $posts_data_a->save();
                }
                for($i=0; $i<$tot_C; $i++){
                    $posts_data_c = new Post; //new temp model instance
                    $posts_data_c->category = $C;
                    $posts_data_c->location = $value;
                    $posts_data_c->save();
                }
            }elseif($tot_A > 1 && $tot_C <= 1){
                for($i=0; $i<$tot_A; $i++){
                    $posts_data_a = new Post; //new temp model instance
                    $posts_data_a->category = $A;
                    $posts_data_a->location = $value;
                    $posts_data_a->save();
                }
                $posts_data_c->category = $C;
                $posts_data_c->save();
            }elseif($tot_A <= 1 && $tot_C > 1){
                for($i=0; $i<$tot_C; $i++){
                    $posts_data_c = new Post; //new temp model instance
                    $posts_data_c->category = $C;
                    $posts_data_c->location = $value;
                    $posts_data_c->save();
                }
                $posts_data_a->category = $A;
                $posts_data_a->save();
            }else {
                $posts_data_a->category = $A;
                $posts_data_a->save();

                $posts_data_c->category = $C;
                $posts_data_c->save();
            }
        }elseif(($tot_A != null && $tot_B != null && $tot_C == null) || ($tot_A != null && $tot_B != null && $tot_C == 0)){
            if($tot_A > 1 && $tot_B > 1){
                for($i=0; $i<$tot_A; $i++){
                    $posts_data_a = new Post; //new temp model instance
                    $posts_data_a->category = $A;
                    $posts_data_a->location = $value;
                    $posts_data_a->save();
                }
                for($i=0; $i<$tot_B; $i++){
                    $posts_data_b = new Post; //new temp model instance
                    $posts_data_b->category = $B;
                    $posts_data_b->location = $value;
                    $posts_data_b->save();
                }
            }elseif($tot_A > 1 && $tot_B <= 1){
                for($i=0; $i<$tot_A; $i++){
                    $posts_data_a = new Post; //new temp model instance
                    $posts_data_a->category = $A;
                    $posts_data_a->location = $value;
                    $posts_data_a->save();
                }
                $posts_data_b->category = $B;
                $posts_data_b->save();
            }elseif($tot_A <= 1 && $tot_B > 1){
                for($i=0; $i<$tot_B; $i++){
                    $posts_data_b = new Post; //new temp model instance
                    $posts_data_b->category = $B;
                    $posts_data_b->location = $value;
                    $posts_data_b->save();
                }
                $posts_data_a->category = $A;
                $posts_data_a->save();
            }else {
                $posts_data_a->category = $A;
                $posts_data_a->save();

                $posts_data_b->category = $B;
                $posts_data_b->save();
            }
        }elseif($tot_A != null && $tot_B != null && $tot_C != null){
            if($tot_A == 1 && $tot_B == 1 && $tot_C ==  1){
                $posts_data_a->category = $A;
                $posts_data_a->save();

                $posts_data_b->category = $B;
                $posts_data_b->save();

                $posts_data_c->category = $C;          
                $posts_data_c->save();

            }elseif($tot_A == 1 && $tot_B == 1 && $tot_C > 1){
                for($i=0; $i<$tot_C; $i++){
                    $posts_data_c = new Post;
                    $posts_data_c->category = $C;
                    $posts_data_c->location = $value;
                    $posts_data_c->save();
                }
                $posts_data_a->category = $A;
                $posts_data_a->save();

                $posts_data_b->category = $B;
                $posts_data_b->save();
            }elseif($tot_A == 1 && $tot_B > 1 && $tot_C == 1){
                for($i=0; $i<$tot_B; $i++){
                    $posts_data_b = new Post;
                    $posts_data_b->category = $B;
                    $posts_data_b->location = $value;
                    $posts_data_b->save();
                }
                $posts_data_a->category = $A;
                $posts_data_a->save();

                $posts_data_c->category = $C;
                $posts_data_c->save();
            }elseif($tot_A == 1 && $tot_B > 1 &&  $tot_C > 1){
                for($i=0; $i<$tot_B; $i++){
                    $posts_data_b = new Post;
                    $posts_data_b->category = $B;
                    $posts_data_b->location = $value;
                    $posts_data_b->save();
                }
                for($i=0; $i<$tot_C; $i++){
                    $posts_data_c = new Post;
                    $posts_data_c->category = $C;
                    $posts_data_c->location = $value;
                    $posts_data_c->save();
                }
                $posts_data_a->category = $A;
                $posts_data_a->save();

            }elseif($tot_A > 1 && $tot_B == 1 && $tot_C == 1){ 
                for($i=0; $i<$tot_A; $i++){
                    $posts_data_a = new Post;
                    $posts_data_a->category = $A;
                    $posts_data_a->location = $value;
                    $posts_data_a->save();
                }
                $posts_data_b->category = $B;
                $posts_data_b->save();

                $posts_data_c->category = $C;
                $posts_data_c->save();
            }elseif($tot_A > 1 && $tot_B == 1 && $tot_C > 1){
                for($i=0; $i<$tot_A; $i++){
                    $posts_data_a = new Post;
                    $posts_data_a->category = $A;
                    $posts_data_a->location = $value;
                    $posts_data_a->save();
                }
                for($i=0; $i<$tot_C; $i++){
                    $posts_data_c = new Post;
                    $posts_data_c->category = $C;
                    $posts_data_c->location = $value;
                    $posts_data_c->save();
                }
                $posts_data_b->category = $B;
                $posts_data_b->save();
            }elseif($tot_A > 1 && $tot_B > 1 && $tot_C == 1){// check the loop
                 for($i=0; $i<$tot_A; $i++){
                    $posts_data_a = new Post;
                    $posts_data_a->category = $A;
                    $posts_data_a->location = $value;
                    $posts_data_a->save();
                }
                for($i=0; $i<$tot_B; $i++){
                    $posts_data_b = new Post;
                    $posts_data_b->category = $B;
                    $posts_data_b->location = $value;
                    $posts_data_b->save();
                }
                $posts_data_c->category = $C;
                $posts_data_c->save();
        }elseif($tot_A > 1 && $tot_B > 1 && $tot_C > 1){
                for($i=0; $i<$tot_A; $i++){
                    $posts_data_a = new Post;
                    $posts_data_a->category = $A;
                    $posts_data_a->location = $value;
                    $posts_data_a->save();
                } 
                for($i=0; $i<$tot_B; $i++){
                    $posts_data_b = new Post;
                    $posts_data_b->category = $B;
                    $posts_data_b->location = $value;
                    $posts_data_b->save();
                }
                for($i=0; $i<$tot_C; $i++){
                    $posts_data_c = new Post;
                    $posts_data_c->category = $C;
                    $posts_data_c->location = $value;
                    $posts_data_c->save();
                }
        }else{
            return view('error');
        }
        }//end of elseif
        else{
            return view('error');
        }      
        return view('success');
    }
    public function setCookie(Request $request){
        $name = 'LocationCookie';
        //if you are getting the value from input box simply use: $value = $request['location'] where location is the name of the input field
        $value = $request->input('locationID');//getting the selected value from the dropdown menu
        $life = 60;//to be reviewded 
        $cookie = cookie($name,$value,$life);
        return response()->view('alert')->withCookie($cookie);
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
