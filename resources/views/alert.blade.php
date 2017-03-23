<!-- alert page viewdisplayed on welcome page after user select a location -->
@extends('main')
@section('title', 'Success')
@section('content')

<br/><br/>
<!-- SUCCESS ALERT -->
<div class="col-md-6">
<div class="alert alert-success">
<a href="/ondesk" class="alert-link">Au Comptoir - On Desk</a><br/>
<a href="/offdesk" class="alert-link">Entrées Individuelles - Individual Entries</a><br/>
<a href="/training" class="alert-link">Présentations - Presentations</a>
</div>
</div>
@endsection
