@extends('main')
@section('title', 'On Desk')
@section('content')

<h1>On-Desk</h1>
<p>Please choose a category!</p>

<!-- 
  <div class="btn-group" role="group" aria-label="...">
  <button type="button" class="btn btn-default">A</button>
  <button type="button" class="btn btn-default">B</button>
  <button type="button" class="btn btn-default">C</button>
</div>
-->
<div class="col-md-7">
 <form>
<div class="form-group row">
  <label for="location-input" class="col-xs-2 col-form-label">Location</label>
  <div class="col-xs-5">
    <select class="form-control" id="location-input">
         @for ($i=0; $i<count($locations); $i++)
         <option>{{ $locations[$i]['locationtag'] }}</option>
         @endfor
    </select>
  </div>
</div>
</form>

<p>
  <button type="button" class="btn btn-primary btn-lg">A</button>
  <button type="button" class="btn btn-primary btn-lg">B</button>
  <button type="button" class="btn btn-primary btn-lg">C</button>
</p>
</div><!-- End Div from col-md-7 class -->
@endsection