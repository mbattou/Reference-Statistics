<?php
/**
*share the statistics data with multiple views: welcome, ondesk, offdesk
*to pass the data to the sidebars in the above views.
*the methods returns the last 24 hour total submissions.
*/
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use DB; //use query builder DB facade
use Carbon\Carbon; //get current timestamp for query builder whereBetween

class SideBarStatsComposer{

    protected $stats_data = [];
    /**
    *create a new composer
    */
    public function __construct(){
        
        $total_A = DB::table('posts')->where('category','=', 1)->where('created_at', '>=', Carbon::now()->subDay())->count();
        $total_B = DB::table('posts')->where('category','=', 2)->where('created_at', '>=', Carbon::now()->subDay())->count();
        $total_C = DB::table('posts')->where('category','=', 3)->where('created_at', '>=', Carbon::now()->subDay())->count();
        $stats_data['total_A'] = $total_A;
        $stats_data['total_B'] = $total_B;
        $stats_data['total_C'] = $total_C;
        $this->stats_data = $stats_data;
    }
    /**
    *bind data to the view
    */
    public function compose(View $view){
        $view->with('stats_data', $this->stats_data);
    }
}