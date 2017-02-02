@extends('main')
@section('title', 'Contact')
@section('content')

<h1>Contact</h1>
<br/><br/>
<!-- SUCCESS ALERT -->
<div class="col-md-6">
<div class="alert alert-info">
  <strong>Info!</strong> Please, feel free to contact {{ $data['admin'] }} at:<strong> {{ $data['email'] }}</strong>.
</div>
</div>

@endsection
