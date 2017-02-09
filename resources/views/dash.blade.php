@extends('main')
@section('title', 'Dash')
@section('content')

<h1>Dashboard</h1>

<!-- dash1 -->
<div class="col-md-4" align="center">
<h3>Dashboard 1</h3>
<hr>
@include('statistics.dash-one')
<hr>
</div>
<!-- dash1 -->
<div class="col-md-4" align="center">
<h3>Dashboard 2</h3>
<hr>
@include('statistics.dash-two')
<hr>
</div>
<!-- dash1 -->
<div class="col-md-4" align="center">
<h3>Dashboard 3</h3>
<hr>
@include('statistics.dash-three')
<hr>
</div>

@endsection