@extends('main')
@section('title', 'Gloup')
@section('content')
<h1>THis is a test page - Gloup Gloup!!</h1>
<p>This is the demo page! </p>
<p>Test:{{ app('request')->cookie('LocationCookie')}}</p>

<!-- Test2 -->

@endsection
