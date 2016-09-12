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
    <link rel='stylesheet' href='<?php echo $path; ?>css/linea.css' />
  </head>
  <body ng-controller="lineaController">



    <div class="container">
      <div class="row">
				<div class="col-md-12">
					<div class="page-header">
					  <h1>Linea del tiempo</h1>
					</div>
					<div style="display:inline-block;width:100%;overflow-y:auto;">
					<ul class="timeline timeline-horizontal">


						<li class="timeline-item" ng-repeat="element in datos | orderBy: ['fechaSegundos','indiceGeneral'] track by $index">
							<div class="timeline-badge success"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">{{element.titulo}}</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> {{element.fecha_creacion}}</small></p>
								</div>
								<div class="timeline-body">
                  <div class="col-md-6 col-md-3">
                    <a href="#" class="thumbnail">
                      <img src="{{element.url}}" alt="" />
                    </a>
                  </div>

									<p>{{element.descripcion}}</p>
								</div>
							</div>
						</li>
										</ul>
				</div>
			</div>

      <table class="table" >
        <tr>
          <th>#</th>
          <th>Titulo</th>
          <th>Descripcion</th>
          <th>File</th>
          <th>Url</th>
          <th>Fecha</th>

        </tr>
        <tr ng-repeat="element in datos | orderBy: ['fechaSegundos','indiceGeneral'] track by $index">
          <td>{{element.indiceGeneral}}</td>
          <td>{{element.titulo}}</td>
          <td>{{element.descripcion}}</td>
          <td>{{element.file}}</td>
          <td>{{element.url}}</td>
          <td>{{element.fecha_creacion}}</td>

        </tr>
      </table>
    </div>

    <script type="text/javascript" src="<?php echo $path; ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $path; ?>js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo $path; ?>js/angular.js"></script>
    <script type="text/javascript" src="<?php echo $path; ?>js/lineaApp.js"></script>
  </body>
</html>
