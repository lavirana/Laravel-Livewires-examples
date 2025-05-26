<div>
    <div class="row" >
    <div class="col-md-6">
        <div id="piechart" style="width: 600px; height: 500px;"></div>
    </div>
<div class="col-md-6">
    <div id="piechart_3d" style="width: 600px; height: 500px;"></div>
</div>
    </div>

</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable(@json($chartData));

        var options = {
          title: 'Monthly Registered Users'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable(@json($chartData));


        var options = {
          title: 'Monthly Registered Users',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>