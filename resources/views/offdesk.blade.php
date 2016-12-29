@extends('main')
@section('title', 'Off Desk')
@section('content')

<h1>Off-Desk</h1>
<p>Please fill up the form!</p>
<hr>

 <div class="col-md-5">
<form>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label">Text</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" value="" id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-xs-2 col-form-label">Location</label>
  <div class="col-xs-10">
    <input class="form-control" type="email" value="" id="example-email-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-xs-2 col-form-label">Counts</label>
  <div class="col-xs-10">
    <input class="form-control" type="url" value="" id="example-url-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-xs-2 col-form-label">Telephone</label>
  <div class="col-xs-10">
    <input class="form-control" type="tel" value="" id="example-tel-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-password-input" class="col-xs-2 col-form-label">Password</label>
  <div class="col-xs-10">
    <input class="form-control" type="password" value="" id="example-password-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-number-input" class="col-xs-2 col-form-label">Number</label>
  <div class="col-xs-10">
    <input class="form-control" type="number" value="" id="example-number-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-datetime-local-input" class="col-xs-2 col-form-label">Date and time</label>
  <div class="col-xs-10">
    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-date-input" class="col-xs-2 col-form-label">Date</label>
  <div class="col-xs-10">
    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-month-input" class="col-xs-2 col-form-label">Month</label>
  <div class="col-xs-10">
    <input class="form-control" type="month" value="2011-08" id="example-month-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-week-input" class="col-xs-2 col-form-label">Week</label>
  <div class="col-xs-10">
    <input class="form-control" type="week" value="2011-W33" id="example-week-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-time-input" class="col-xs-2 col-form-label">Time</label>
  <div class="col-xs-10">
    <input class="form-control" type="time" value="13:45:00" id="example-time-input">
  </div>
</div>
  <button type="button" class="btn btn-primary btn-lg">Submit</button>
</form>
</div>
@endsection
