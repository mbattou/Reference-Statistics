@extends('main')
@section('title', 'Contact')
@section('content')

<h1>Contact</h1>
<P>Please, feel free to contact {{ $data['admin'] }} at: {{ $data['email'] }}</P>

@endsection
