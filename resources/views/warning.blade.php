<!--
  warning page view, displayed on forms when no location is set and user
  tries to go on the form pages
 -->
@extends('main')
@section('title', 'Success')
@section('content')

<br/><br/>
<!-- SUCCESS ALERT -->
<div class="col-md-6">
<div class="alert alert-warning">
  <strong>Warning!</strong> there seems to be an issue, <a href="/contact" class="alert-link">please contact technical support</a>.
</div>
</div>
@endsection
