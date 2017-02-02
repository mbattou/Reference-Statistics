@extends('main')
@section('title', 'On Desk')
@section('content')

<h1>On-Desk Form</h1>

<!-- check if cookie is set or not -->
@if(app('request')->cookie('LocationCookie') == null)
 @include('no-location')
 @else
 <p>Simply press on a category to submit</p>
<div class="col-md-3"> <!-- to centre: col-md-4 col-md-offset-4 -->
<form action="store" method="POST">
    {!! csrf_field() !!} <!-- protect form from cross site forgery -->
<hr>
  <button style="height:50px; width:60px" type="submit" name="categoryID" class="btn btn-primary btn-lg" value="1">A</button>
  <button style="height:50px; width:60px" type="submit" name="categoryID" class="btn btn-primary btn-lg" value="2">B</button>
  <button style="height:50px; width:60px" type="submit" name="categoryID" class="btn btn-primary btn-lg" value="3">C</button>
<hr>
</form>
</div><!-- End Div from col-md-8 class -->
@endif
<!-- end of check if cookie is set or not -->
@endsection