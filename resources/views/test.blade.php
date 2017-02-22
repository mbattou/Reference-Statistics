  <!-- 
Auth:Mohamed Battou
Date:08/01/2017
This is the main layout of the date time picker
 -->
<!-- a test page to test date and time picker -->

@extends('main')
@section('content')
<p>Splaassh Zone</p>
Total A since start {{ $stats_data['total_A'] }}<br/>
Total B since start {{ $stats_data['total_B'] }}<br/>
Total C since start {{ $stats_data['total_C'] }}<br/>
Tot since One day ago (A) {{ $stats_data['one_day_ago_A'] }}<br/>
Tot since One week ago (A) {{ $stats_data['one_week_ago_A'] }}<br/>

--
<form class="form-inline">
  <label class="sr-only" >Name</label>
  <div class="input-group">
  <input type="text" class="form-control col-md-2" id="inlineFormInput" placeholder="Jane Doe">
</div>
  <label class="sr-only" for="inlineFormInputGroup">Username</label>
  <div class="input-group">
    <input type="text" class="form-control col-md-2" id="inlineFormInputGroup" placeholder="Username">
  </div>

</form>


  @endsection