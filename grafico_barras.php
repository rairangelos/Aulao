<?php  
  $numero = 753;

?> 

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['GRE', 'Mata Centro', 'Mata Norte', 'Recife Sul', 'Recife Norte', 'Mata Sul', 'Metro Sul'],
          [,  <?php echo $numero; ?>,      938,         522,             998,           450,      614.6]
        
        ]);

        var options = {
          title : 'Incrições para o Aulão da Globo 2019',
          vAxis: {title: 'Inscrições'},
          hAxis: {title: 'GRE'},
          seriesType: 'bars',
          series: {16: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>