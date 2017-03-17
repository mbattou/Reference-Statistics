<!-- training, presentation and course view -->
@extends('main')
@section('title', 'Training')
@section('content')
<!-- 
The training form
-->
<h1>Présentations - Presentations</h1>
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
<div class="form-inline">
  <label class="sr-only" >First Name</label>
  <input type="text" class="form-control" name="firstname" placeholder="First Name">

  <label class="sr-only">Last Name</label>
    <input type="text" class="form-control" name="lastname" placeholder="Last Name">
       <small id="asterix" class="text-muted text-success">
      First and Last name are optional.
       </small>
</div>
<hr>
<div class="form-group row">
  <label for="number-presentation-input" class="col-xs-2 col-form-label">Number of presentations</label>
  <i class="text-danger">*</i>
  <div class="col-xs-5">
    <input class="form-control" type="number" name="number-presentation" id="number-presentation-input" min="0">
  </div>
</div>
<div class="form-group row">
  <label for="number-participant-input" class="col-xs-2 col-form-label">Number of participants</label>
    <i class="text-danger">*</i>
  <div class="col-xs-5">
    <input class="form-control" type="number" name="number-participant" id="number-participant-input" min="0">
  </div>
</div>
<div class="form-group row">
  <label for="date-input" class="col-xs-2 col-form-label">Approximate Date</label>
  <div class="col-xs-5">
    <input class="form-control" type="date" value="today" name="date" id="date-input">
  </div>
</div>
    <div class="form-group row">
      <label class="col-xs-2 col-form-label" data-placement="left" data-align="top" data-autoclose="true">Approximate Duration</label>
      <div class="col-xs-5">
       <div class="input-group clockpicker">
        <div class="input-group-addon">
         <i class="glyphicon glyphicon-time"></i>
        </div>
        <input class="form-control" type="text" value="00:00" name="duration" id="duration"/>
       </div>
      </div>
     </div>
  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
 </form>
 <hr>
</div>
<!-- training definitions reminder -->
@include('def-training')

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
<!-- Form validation errors -->
@if(count($errors)>0)
<div class="col-md-5">
<div class="alert alert-danger">
<strong>Attention!</strong>
    <ul>
    @foreach($errors->all() as $error)
     <li>{{$error}}</li>
    @endforeach
    </ul>
</div>
</div>
@endif
<!-- End Form validation errors -->
@endsection
