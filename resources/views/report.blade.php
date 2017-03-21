@extends('main')
@section('title', 'Report')
@section('content')

<h1>Reports</h1>
<hr>
<br/>
<div class="form-group row">
<!-- FROM -->
  <label for="get-date" class="col-xs-1 col-form-label">From</label>
  <div class="col-xs-2">
    <select class="form-control" id="get-date" name="get-date">
         <option value="2017-02-22 09:31:43">2017-02-22 09:31:43</option>
    </select>
  </div>
  <!-- TO -->
    <label for="current-date" class="col-xs-1 col-form-label">To</label>
  <div class="col-xs-2">
    <select class="form-control" id="current-date" name="current-date">
         <option value="0">Now</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Run</button>
  </div>
  <!-- Table -->
<div class="col-md-6">
<table class="table">
  <thead class="table table-inverse">
    <tr>
      <th>#</th>
      <th>Total A</th>
      <th>Total B</th>
      <th>Total C</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{ $stats_data['total_A'] }}</td>
      <td>{{ $stats_data['total_B'] }}</td>
      <td>{{ $stats_data['total_C'] }}</td>
    </tr>
  </tbody>
</table>
</div>
<!-- Table -->
<div class="col-md-6">
<table class="table">
  <thead class="table table-inverse">
    <tr>
      <th>#</th>
      <th>Total Presentations</th>
      <th>Total Participants</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{ $stats_data['total_pres'] }}</td>
      <td>{{ $stats_data['total_part'] }}</td>
    </tr>
  </tbody>
</table>
</div>
</div><!-- end of col div -->
<!-- run user centric statistics -->
<!-- importing users from the DB -->
<div class="col-md-6">
<hr>
<label for="location-input" class="col-xs-2 col-form-label col-md-offset-1">Your name</label>
<div class="col-md-4">
    <select class="form-control" id="user-name" name="username">
@for ($i=0; $i<count($users); $i++)
{{ $name=$users[$i]['name'] }}
<option value="{{$name}}">{{ $name }}</option>
@endfor
    </select>
  </div>
    <button type="submit" class="btn btn-primary btn-md" value="submit">Run</button>
</div><!-- End col div -->
<div class="col-md-6">
<hr>
<!-- Table -->
<table class="table">
  <thead class="table table-inverse">
    <tr>
      <th>#</th>
      <th>Total A</th>
      <th>Total B</th>
      <th>Total C</th>
      <th>Total Presentations</th>
      <th>Total Participants</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{ $stats_data['total_A'] }}</td><!-- to be replaced by real user corresponding values -->
      <td>{{ $stats_data['total_B'] }}</td><!-- to be replaced by real user corresponding values -->
      <td>{{ $stats_data['total_C'] }}</td><!-- to be replaced by real user corresponding values -->
      <td>{{ $stats_data['total_pres'] }}</td><!-- to be replaced by real user corresponding values -->
      <td>{{ $stats_data['total_part'] }}</td><!-- to be replaced by real user corresponding values -->
    </tr>
  </tbody>
</table>
</div>
</div><!-- End col div -->
<!-- End users import -->
@endsection