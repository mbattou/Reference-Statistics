@extends('main')
@section('title', 'Error')
@section('content')

<br/><br/>
<!-- SUCCESS ALERT -->
<div class="col-md-6">
<div class="alert alert-danger">
  <strong>Oh Snap!</strong> I did not expect that value from you...
 <br/><br/>
 The error could be due to one the following:
<ul>
    <li>You have left all the fields empty and tried to submit.</li>
    <li>You have entere the value "0" (zero) in all the fields and tried to submit.</li>
</ul> 
<br/>
Feel free to consult our <a href="/faq">FAQ</a> for more information or contact technical support for help.
</div>
</div>
@endsection
