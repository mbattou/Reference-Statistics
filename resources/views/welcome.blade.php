@extends('main')
@section('title', 'Welcome')
@section('content')

      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron" style="background-color:#8F001A"> <!-- UO Garnet background -->
            <p class="lead" style="color:#000000">Welcome...<br/>
               Please use the tool to record your daily statistics.
            <br/>Go to the "My Forms" section for a quick access to forms and stats.</p>
          </div>
        </div>
      </div>
      <!-- end of header .row -->
<!-- Testing only --><p>Test: {{app('request')->cookie('LocationCookie')}}</p>
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
      <div class="col-md-3 col-md-offset-1">
          <h2>Sidebar Stat</h2>
          <!-- Pie Cahrt Start -->
          <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Category');
        data.addColumn('number', 'Location');
        data.addRows([
          ['A', 13],
          ['B', 3],
          ['C', 1],
          ['Other', 1]
        ]);

        // Set chart options
        var options = {'title':'',
                       'width':350,
                       'height':300,
                       'backgroundColor':'#DCDCDC'//uOttawa grey colour
                       };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    <div id="chart_div"></div>
          <!-- Pie Chart Code end -->
      </div>
<!-- Testing zone -->
<p>Testing Area:</p>
@for ($i=0; $i<count($posts); $i++)
<p>ID: {{ $posts[$i]['id'] }}, Category: {{ $posts[$i]['category'] }}, Location: {{ $posts[$i]['location'] }}</p>
@endfor
<hr>
@endsection