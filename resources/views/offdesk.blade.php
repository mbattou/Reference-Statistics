@extends('main')
@section('title', 'Off Desk')
@section('content')

<h1>Entrées Individuelles - Individual Entries</h1>
@if(app('request')->cookie('LocationCookie') == null)
  @include('no-location')
<!-- stats side bar -->
  @include('sidebar')
@else
<div class="col-md-7">
 <form action="offdesk" method="POST">
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
<!-- category reminder -->
@include('definition')

@endif

<!-- External Calls -->
<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

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
