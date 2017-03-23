<!-- sidebar statistics page view -->
<!-- 
  stats: last 24 hours statistics 
  returns the total for each category
  -->
  @if($stats_data['total_A'] == 0  && $stats_data['total_B'] == 0 && $stats_data['total_C'] == 0)
  <div class="col-md-3 col-md-offset-1" align="center">
    <h3>Sidebar Statistics</h3>
      <hr>
         Statistics not available.
      <hr>   
  </div>
  @else
<div class="col-md-3 col-md-offset-1" align="center">
          <h3>Sidebar Statistics</h3>
          <hr>
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
          ['Cat A', {{ $stats_data['total_A'] }} ],
          ['Cat B', {{ $stats_data['total_B'] }} ],
          ['Cat C', {{ $stats_data['total_C'] }} ]
        ]);

        // Set chart options
        var options = {'title':'Last 24 hours count',
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
    <hr>
    </div>
    @endif