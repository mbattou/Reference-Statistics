@extends('main')
@section('content')
<!--This is the form that will post the data into DB-->
<p>This is the Webform page</p>
<form action="store" method="POST">
    {!! csrf_field() !!} <!-- protect form from cross site forgery -->
    <label>
        CategoryID:<input name="category" type="text">
    </label>
    <br/>
        <label>
        CodeID:<input name="code" type="text">
    </label>
    <br/>
    <input type="submit">
</form>
@endsection