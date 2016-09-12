<?php
	session_start();
	$path = 'lib/';
?>

<!DOCTYPE html>
<html lang="es" ng-app="lineaApp">
  <head>
    <meta charset="utf-8">
    <title>Linea del tiempo eventos</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/bootstrap.css">
    <link rel='stylesheet' href='<?php echo $path; ?>css/fullcalendar.css' />
  </head>
  <body ng-controller="lineaController">
    <div class="container">
      <table class="table">
        <tr>
          <th>Titulo</th>
          <th>Descripcion</th>
          <th>Imagen</th>
          <th>Pdf</th>
          <th>Fecha</th>
        </tr>
        <tr ng-repeat="element in elementos.items">
          <td>{{element.titulo}}</td>
          <td>{{element.descripcion}}</td>
          <td>{{element.imagen}}</td>
          <td>{{element.pdf}}</td>
          <td>{{element.fecha}}</td>
        </tr>
      </table>
    </div>

    <script type="text/javascript" src="<?php echo $path; ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $path; ?>js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo $path; ?>js/angular.js"></script>
    <script type="text/javascript" src="<?php echo $path; ?>js/lineaApp.js"></script>
  </body>
</html>
