@extends('main')
@section('title', 'Contact')
@section('content')

<h1>Contact</h1>
<br/><br/>
<!-- INFO ALERT -->
<div class="col-md-6">
<div class="alert alert-info">
  <strong>Please, feel free to contact</strong> {{ $data['admin'] }} at:<strong> {{ $data['email'] }}</strong>.<br/>
  OR<br/>
  <strong>Contact </strong><a href="http://biblio.uottawa.ca/en/technical-support">technical support</a>.
</div>
</div>

@endsection
