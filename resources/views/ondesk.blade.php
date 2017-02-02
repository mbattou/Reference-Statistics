@extends('main')
@section('title', 'On Desk')
@section('content')

<h1>On-Desk Form</h1>

<!-- check if cookie is set or not -->
@if(app('request')->cookie('LocationCookie') == null)
 @include('no-location')
 @else
 <p>Simply press on a category</p>
<div class="col-md-8">
<hr>
  <button type="button" class="btn btn-primary btn-lg">A</button>
  <button type="button" class="btn btn-primary btn-lg">B</button>
  <button type="button" class="btn btn-primary btn-lg">C</button>
<hr>
</div><!-- End Div from col-md-8 class -->
@endif
<!-- end of check if cookie is set or not -->
@endsection