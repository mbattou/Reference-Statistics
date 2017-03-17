<?php
//default namespace
namespace App\Http\Controllers;
//default imports
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//new imports - Models
use App\Post; //call the Post model
use App\Location; //call the Location Model
use App\Cat; //call the Cat Model
use App\Presentation; //call the Presentation Model
use Illuminate\Http\Request;//using Http request
use DB; //use query builder DB facade
use Carbon\Carbon; //get current timestamp for query builder whereBetween

class PagesController extends Controller{
/*
*Get Functions
*/       
    public function getIndex(){
        $locations = Location::where('id','>=', 1)->orderBy('id', 'asc')->get();
        return view('welcome', ['locations'=>$locations]);
    }
    public function getOndesk(){
        $cats = Cat::all();
        //passing posts values for the sidebar on ondesk form
        return view('ondesk')->withCats($cats);
    }
    public function getOffdesk(){
        return view('offdesk');
    }
    public function getTraining(){
        return view('training');
    }
    public function getFaq(){
        return view('faq');
    }
    public function getReport(){
        $stats_data = [];
        $total_A = DB::table('posts')->where('category','=', 1)->count();
        $total_B = DB::table('posts')->where('category','=', 2)->count();
        $total_C = DB::table('posts')->where('category','=', 3)->count();

        $stats_data['total_A'] = $total_A;
        $stats_data['total_B'] = $total_B;
        $stats_data['total_C'] = $total_C;

        $total_pres = DB::table('presentations')->where('tot_presentation', '>', 0)->sum('tot_presentation');
        $total_part = DB::table('presentations')->where('tot_participant', '>', 0)->sum('tot_participant');

        $stats_data['total_pres'] = $total_pres;
        $stats_data['total_part'] = $total_part;

        return view('report', ['stats_data'=>$stats_data]);
    }

    public function getDash(){
        $stats_data = [];
        $total_A = DB::table('posts')->where('category','=', 1)->count();
        $total_B = DB::table('posts')->where('category','=', 2)->count();
        $total_C = DB::table('posts')->where('category','=', 3)->count();

        $one_week_ago_A =   DB::table('posts')->where('category', '=', 1)->where('created_at','>=', Carbon::now()->subWeek())->count();
        $one_week_ago_B =   DB::table('posts')->where('category', '=', 2)->where('created_at','>=', Carbon::now()->subWeek())->count();
        $one_week_ago_C =   DB::table('posts')->where('category', '=', 3)->where('created_at','>=', Carbon::now()->subWeek())->count();
        
        $one_month_ago_A =   DB::table('posts')->where('category', '=', 1)->where('created_at','>=', Carbon::now()->subMonth())->count();
        $one_month_ago_B =   DB::table('posts')->where('category', '=', 2)->where('created_at','>=', Carbon::now()->subMonth())->count();
        $one_month_ago_C =   DB::table('posts')->where('category', '=', 3)->where('created_at','>=', Carbon::now()->subMonth())->count();

        $stats_data['total_A'] = $total_A;
        $stats_data['total_B'] = $total_B;
        $stats_data['total_C'] = $total_C;

        $stats_data['one_week_ago_A'] = $one_week_ago_A;
        $stats_data['one_week_ago_B'] = $one_week_ago_B;
        $stats_data['one_week_ago_C'] = $one_week_ago_C;

        $stats_data['one_month_ago_A'] = $one_month_ago_A;
        $stats_data['one_month_ago_B'] = $one_month_ago_B;
        $stats_data['one_month_ago_C'] = $one_month_ago_C;

        return view('dash', ['stats_data'=>$stats_data]);
    }
    public function getData(){
        return view('post');
    }
    //to be deleted POST to test form validation
    public function store(Request $request){
        //form validation
        $this->validate($request, [
        'lastname' => 'nullable|alpha|max:3',
        'firstname' => 'nullable|alpha|max:3',
        'number-presentation' => 'required|numeric|digits_between:1,3',
        'number-participant' => 'required|numeric|digits_between:1,3',
        'date' => 'required|date',
        'duration' => 'required|date_format:H:i',
        ]);

        return view('success');
    }
    public function getTest(){
        $stats_data = [];
        $total_A = DB::table('posts')->where('category','=', 1)->count();
        $total_B = DB::table('posts')->where('category','=', 2)->count();
        $total_C = DB::table('posts')->where('category','=', 3)->count();
        $one_day_ago_A =   DB::table('posts')->where('category', '=', 1)->where('created_at','>=', Carbon::now()->subDay())->count();
        $one_week_ago_A =   DB::table('posts')->where('category', '=', 1)->where('created_at','>=', Carbon::now()->subWeek())->count();
        $stats_data['total_A'] = $total_A;
        $stats_data['total_B'] = $total_B;
        $stats_data['total_C'] = $total_C;
        $stats_data['one_day_ago_A'] = $one_day_ago_A;
        $stats_data['one_week_ago_A'] = $one_week_ago_A;

        return view('test', ['stats_data'=>$stats_data]);
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
       /* $first_name = $request->input('firstname');
        $last_name = $request->input('lastname');
        $person = $first_name." ".$lastName;*/
        $tot_A = $request->input('input-a');
        $tot_B = $request->input('input-b');
        $tot_C = $request->input('input-c');
//form validation, limit entries to numerics less than 999
        $this->validate($request, [
          'input-a' => 'required|numeric|digits_between:1,3',  
          'input-b' => 'required|numeric|digits_between:1,3',
          'input-c' => 'required|numeric|digits_between:1,3',
        ]);         
//exceptions        
        if($value == null){
            return view('warning');
        }elseif (($tot_A == null && $tot_B == null && $tot_C == null) || ($tot_A == 0 && $tot_B == 0 && $tot_C == 0)){
            return view('error');
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
    public function storeTraining(Request $request){
        $name = 'LocationCookie';//cookie name
        $value = $request -> cookie($name);

        $data = new Presentation;

        //form validation
        $this->validate($request, [
        'lastname' => 'nullable|alpha|max:15',
        'firstname' => 'nullable|alpha|max:15',
        'number-presentation' => 'required|numeric|digits_between:1,3',
        'number-participant' => 'required|numeric|digits_between:1,3',
        'date' => 'required|date',
        'duration' => 'required|date_format:H:i',
        ]);
        //continue if passed validation, else throw exception
        $lastName = $request->input('lastname');
        $firstName = $request->input('firstname');
        $fullName = $firstName." ".$lastName;
        $numberPresentation = $request->input('number-presentation');
        $numberParticipant = $request->input('number-participant');
        $approxDate = $request->input('date');
        $approxDuration = $request->input('duration');
        //put data together
        $data->length = $approxDuration;
        $data->presenter = $fullName;
        $data->tot_participant = $numberParticipant;
        $data->date = $approxDate;
        $data->tot_presentation = $numberPresentation;
        $data->location = $value;
        //make sure cookie didnt expire last moment
        if($value == null){
            return view('warning');
        }elseif($numberPresentation <= 0 || $numberParticipant <= 0 ){ //form validation lets zero pass
            return view('error');
    }else {
            $data->save();
        }
        return view('success');
    }
    public function setCookie(Request $request){
        $name = 'LocationCookie';
        //if you are getting the value from input box simply use: $value = $request['location'] where location is the name of the input field
        $value = $request->input('locationID');//getting the selected value from the dropdown menu
        //$life = 60; //cookie expires in 1 hour
        //$cookie = cookie($name,$value,$life); //set the cookie for the specified life time
        $cookie = cookie()->forever($name,$value); //set cookie forever aka five years
        return response()->view('alert')->withCookie($cookie);
    }
/*
*Other functions
*/    

}
