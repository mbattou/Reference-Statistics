@extends('main')
@section('title', 'Success')
@section('content')

<br/><br/>
<!-- SUCCESS ALERT -->
<div class="col-md-6">
<div class="alert alert-success">
  <strong>Success!</strong> You have set your location, Please proceed to the forms.<br/><br/>

Submit <a href="/ondesk" class="alert-link">individual category statistics from service desk</a><br/>
Submit <a href="/offdesk" class="alert-link">batch category statistics off service desk</a><br/>
Submit <a href="/training" class="alert-link">batch trainings, presentations and courses statistics</a>
</div>
</div>
@endsection
