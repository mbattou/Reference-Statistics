@extends('main')
@section('title', 'Success')
@section('content')

<br/><br/>
<!-- SUCCESS ALERT -->
<div class="col-md-6">
<div class="alert alert-success">
  <strong>Success!</strong> You have set your location, <a href="/" class="alert-link">please go back to the home page</a>.
</div>
<p>OR<p>
<!-- Cookie INFO ALERT -->
<div class="alert alert-info">
  <strong>Info!</strong> <a href="/about" class="alert-link">read more about browser cookies</a>.
</div>
</div>
@endsection
