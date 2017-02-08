@extends('main')
@section('title', 'Off Desk')
@section('content')

<h1>Off-Desk Form</h1>
@if(app('request')->cookie('LocationCookie') == null)
  @include('no-location')
<!-- stats side bar -->
  @include('sidebar')
@else
<div class="col-md-7">
<hr>
<h3>Category Count</h3>
<hr>
 <form action="offdesk" method="POST">
  {!! csrf_field() !!} <!-- protect form from cross site forgery -->
<div class="form-group row">
  <label for="name-input" class="col-xs-2 col-form-label">Organizers</label>
  <div class="col-xs-5">
    <input class="form-control" type="text" value="" id="name-input">
  </div>
</div>
<div class="form-group row">
  <label for="input-a" class="col-xs-2 col-form-label">Number of "A"</label>
  <div class="col-xs-5">
    <input class="form-control" type="number" name="input-a">
  </div>
  </div>
  <div class="form-group row">
  <label for="input-b" class="col-xs-2 col-form-label">Number of "B"</label>
  <div class="col-xs-5">
    <input class="form-control" type="number" name="input-b">
  </div>
  </div>
  <div class="form-group row">
  <label for="input-c" class="col-xs-2 col-form-label">Number of "C"</label>
  <div class="col-xs-5">
    <input class="form-control" type="number" name="input-c">
  </div>
</div>
<hr>
<h3>Presentations - Training - Courses</h3>
<hr>
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
