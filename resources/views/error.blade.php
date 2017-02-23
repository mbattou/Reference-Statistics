@extends('main')
@section('title', 'Success')
@section('content')

<br/><br/>
<!-- SUCCESS ALERT -->
<div class="col-md-6">
<div class="alert alert-danger">
  <strong>Error!</strong> you have encountered an unexpected error, <a href="/contact" class="alert-link">please contact technical support</a>.
 <br/><br/>
Meanwhile, please make sure you have correctly entered all the required form fields, in the specified format. 
</div>
</div>
@endsection
