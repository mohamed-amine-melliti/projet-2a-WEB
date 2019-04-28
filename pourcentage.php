<?php
include "../../core/commandeC.php";
include "../../entities/commande.php";
$db = config::getConnexion();
	$result=$db->query('SELECT * FROM employe');
$results=$db->query('SELECT * FROM employe where etatCmd="envoye"');
$nbc=0;
$nbs=0;
 while ($row = $result->fetch()) 
 {
 $nbc++;
 }
 while ($row = $results->fetch()) 
 {
 $nbs++;
 }
 $nbcp=($nbs*100)/$nbc;
 $nbsp=100 - $nbcp;
 ?>
 <html>
 <head>
 	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
 </head>
 <body>
 	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Etat commande', 'nombre'],
          ['Envoyes',     <?php echo $nbcp ?> ],
          ['non Envoyes',      <?php echo $nbsp ?>],
         
        ]);

        var options = {
          title: 'Etat des Commandes'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <div id="piechart" style="width: 50px; height: 50px;"></div>
  </body>
</html>
