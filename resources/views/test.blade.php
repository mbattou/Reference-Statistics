  <!-- 
Auth:Mohamed Battou
Date:08/01/2017
This is the main layout of the date time picker
 -->
<!-- a test page to test date and time picker -->

@extends('main')
@section('content')
<p>Splaassh Zone</p>

<form action="setCookie" method="POST">
    {!! csrf_field() !!} <!-- protect form from cross site forgery -->
    <label>
        Location (Cookie):<input name="location" type="text">
    </label>
    <br/>
    Submit
    <input type="submit" value="Submit">
</form>
  @endsection