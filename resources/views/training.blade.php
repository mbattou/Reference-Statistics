@extends('main')
@section('title', 'On Desk')
@section('content')
<!-- 
The training form
-->
<h1>Presentations - Training - Courses Form</h1>

<!-- check if cookie is set or not -->
@if(app('request')->cookie('LocationCookie') == null)
 @include('no-location')
<!-- stats side bar -->
 @include('sidebar')
 @else
<div class="col-md-7">
 <form action="training" method="POST">
  {!! csrf_field() !!} <!-- protect form from cross site forgery -->
<hr>
<h3>Submit batch of stats</h3>
<hr>
<div class="form-group row">
  <label for="name-input" class="col-xs-2 col-form-label">First, Last </label>
  <div class="col-xs-5">
    <input class="form-control" type="text" value="" id="name-input">
  </div>
</div>
<div class="form-group row">
  <label for="number-presentation-input" class="col-xs-2 col-form-label">Number of presentations</label>
  <div class="col-xs-5">
    <input class="form-control" type="number" id="number-presentation-input">
  </div>
</div>
<div class="form-group row">
  <label for="number-participant-input" class="col-xs-2 col-form-label">Number of participants</label>
  <div class="col-xs-5">
    <input class="form-control" type="number" id="number-participant-input">
  </div>
</div>
<div class="form-group row">
  <label for="date-input" class="col-xs-2 col-form-label">Date</label>
  <div class="col-xs-5">
    <input class="form-control" type="date" value="today" id="date-input">
  </div>
</div>
    <div class="form-group row">
      <label class="col-xs-2 col-form-label" data-placement="left" data-align="top" data-autoclose="true">Duration</label>
      <div class="col-xs-5">
       <div class="input-group clockpicker">
        <div class="input-group-addon">
         <i class="glyphicon glyphicon-time"></i>
        </div>
        <input class="form-control" type="text" value="01:30"  id="duration"/>
       </div>
      </div>
     </div>
  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
 </form>
 <hr>
</div>
@endif

<!-- External Calls -->
<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Bootstrap Clock Picker -->
<link rel="stylesheet" href="https://weareoutman.github.io/clockpicker/dist/bootstrap-clockpicker.min.css"/>
<script src="https://weareoutman.github.io/clockpicker/dist/bootstrap-clockpicker.min.js"></script>
<!-- JS call Clock Picker -->
<script>
    var clockpicker = $('.clockpicker').clockpicker({
      	placement: 'top',
	      align: 'left',
	      donetext: 'OK',
        'default': 'now'
}).find('input');
</script>
<!-- END JS -->
@endsection
