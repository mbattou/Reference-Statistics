<!-- 
    Dashboard # 1 
    Total - Since begining of time - Categories - For All locations
    --> 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Category', 'Total as of today'],
          ['Cat A',     {{ $stats_data['total_A'] }} ],
          ['Cat B',      {{ $stats_data['total_B'] }} ],
          ['Cat C',  {{ $stats_data['total_C'] }} ]
        ]);

        var options = {
          title: 'Tot categories count - since start of time',
          pieHole: 0.4,
          backgroundColor: '#DCDCDC',
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

    <div id="donutchart" style=""></div>