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
  <i class="text-danger">*</i>
  <div class="col-xs-5">
    <input class="form-control" type="number" name="input-a" min="0">
  </div>
  </div>
  <div class="form-group row">
  <label for="input-b" class="col-xs-2 col-form-label">Number of "B"</label>
  <i class="text-danger">*</i>
  <div class="col-xs-5">
    <input class="form-control" type="number" name="input-b" min="0">
  </div>
  </div>
  <div class="form-group row">
  <label for="input-c" class="col-xs-2 col-form-label">Number of "C"</label>
  <i class="text-danger">*</i>
  <div class="col-xs-5">
    <input class="form-control" type="number" name="input-c" min="0">
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
<!-- Form validation errors -->
@if(count($errors)>0)
<div class="col-md-5">
<div class="alert alert-danger">
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
