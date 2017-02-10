  <!-- 
    Dashboard # 2
    Add description here
--> 
  <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Category", "Total"],
        ["Cat A", {{ $stats_data['one_month_ago_A'] }} ],
        ["Cat B", {{ $stats_data['one_month_ago_B'] }} ],
        ["Cat C", {{ $stats_data['one_month_ago_C'] }} ],
      ]);

      var view = new google.visualization.DataView(data);
      var options = {
        title: "Total categories - since last month",
        legend: "none",
        backgroundColor: '#DCDCDC',
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="barchart_values" style=""></div>