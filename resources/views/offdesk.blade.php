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
<h3>Submit batch of stats</h3>
<hr>
 <form action="offdesk" method="POST">
  {!! csrf_field() !!} <!-- protect form from cross site forgery -->
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
