@extends('main')
@section('title', 'Welcome')
@section('content')

      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron" style="background-color:#8F001A"> <!-- UO Garnet background -->
            <p class="lead" style="color:#000000">Welcome...<br/>
               Please use the tool to record your daily statistics.
            <br/>Hit to the "My Forms" section for a quick access to forms and stats.</p>
          </div>
        </div>
      </div>
      <!-- end of header .row -->

      <div class="row">
        <div class="col-md-8">
          <div class="post">
            <h3>Generate a report?</h3>
            <p>Please, use the botton to go to the report page</p>
            <a href="/report" class="btn btn-primary">Rport Page</a>
          </div>
          <hr>
        </div>
<!-- Testing zone -->
<p>Testing Area:</p>

@for ($i=0; $i<count($posts); $i++)
<p>ID: {{ $posts[$i]['id'] }}, Category: {{ $posts[$i]['category'] }}, Location: {{ $posts[$i]['location'] }}</p>
@endfor
<p>{{$posts}}</p>
        <div class="col-md-3 col-md-offset-1">
          <h2>Sidebar-Widget</h2>
        </div>
      </div>
@endsection