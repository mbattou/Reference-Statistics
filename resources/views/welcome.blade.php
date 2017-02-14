@extends('main')
@section('title', 'Welcome')
@section('content')

<!--
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron" style="background-color:#8F001A"> <!-- UO Garnet background -->
 <!--         <p class="lead" style="color:#000000">Welcome...<br/>
               Please use the tool to record your daily statistics.
            <br/>Go to the "My Forms" section for a quick access to forms and stats.</p>
          </div>
        </div>
      </div> 

      <!-- end of header .row -->
<!-- Testing only <p>Test: {{app('request')->cookie('LocationCookie')}}</p> -->
<!-- check if the  location cookie is set or not-->      
       @if (app('request')->cookie('LocationCookie') == null )
        @include('select-location')
        @else
          <div class="col-md-8">
            <h3>You have already selected a location, please proceed to the forms.</h3>
            <hr>
          </div>
       @endif
<!-- end of check if the  location cookie is set or not--> 

<!-- stats side bar -->
@include('sidebar')
@endsection