<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- 
    Dashboard # 3
    Add description here
--> 
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Category", "Total", { role: "style" } ],
        ["Cat A", {{ $stats_data['one_week_ago_A'] }} , "#8F001A"],
        ["Cat B", {{ $stats_data['one_week_ago_B'] }} , "#8F001A"],
        ["Cat C", {{ $stats_data['one_week_ago_C'] }} , "#8F001A"]
      ]);

      var view = new google.visualization.DataView(data);
      var options = {
        title: "Total categories - since last week",
        legend: "none",
        backgroundColor: '#DCDCDC',
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style=""></div>