  <!-- 
    Dashboard # 2
    Add description here
--> 
  <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Category", "Total by location"],
        ["Cat A", {{ $stats_data['total_A'] }} ],
        ["Cat B", {{ $stats_data['total_B'] }} ],
        ["Cat C", {{ $stats_data['total_C'] }} ],
      ]);

      var view = new google.visualization.DataView(data);
      var options = {
        title: "Tot categories by location - since start of time",
        legend: "none",
        backgroundColor: '#DCDCDC',
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="barchart_values" style=""></div>