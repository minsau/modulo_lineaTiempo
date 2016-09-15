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
					<div id="timeline" style="display:inline-block;width:100%;overflow-y:auto;">
					<ul class="timeline timeline-horizontal">


						<li id="{{element.indiceGeneral}}" class="timeline-item " ng-repeat="element in datos | orderBy: ['fechaSegundos','indiceGeneral'] track by $index">
							<div  class="timeline-badge success " ng-click="ir('tabla_'+element.indiceGeneral)"><i  class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel ">
								<div class="timeline-heading">
									<h4 class="timeline-title">{{element.titulo}}</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> {{element.fecha_creacion}}</small></p>
								</div>
								<div class="timeline-body">
                  <div class="col-md-6 col-md-3">
                    <a href="#" class="thumbnail">
                      <img src="{{element.url}}" ng-click="setUrl(element.url)" data-toggle="modal" data-target="#mostrarArchivo" alt="" />
                    </a>
                  </div>

									<p>{{element.descripcion}}</p>
								</div>
							</div>
						</li>
										</ul>
				</div>
			</div>
    </div>

		<div class="" id="registrosTabla">

		        	<div  class="panel panel-default" id="{{'tabla_'+element.indiceGeneral}}" ng-click="ir(element.indiceGeneral)" ng-repeat="element in datos | orderBy: ['fechaSegundos','indiceGeneral'] track by $index">
			          <div class="panel-heading"><p>{{element.titulo}} </p>
			          </div>
								<p>{{element.descripcion}} </p>
			          <p>{{element.file}}</p>
			          <p>{{element.url}}</p>
			          <p>{{element.fecha_creacion}}</p>

			        </div>

		</div>


		<div id="mostrarArchivo" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Ver archivo {{url}}</h4>
          </div>
          <div class="modal-body">
						<iframe src="{{url}}" width="100%" height="100%">{{url}}</iframe>
          </div>
        </div>

      </div>
    </div>
    <script type="text/javascript" src="<?php echo $path; ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $path; ?>js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo $path; ?>js/angular.js"></script>
    <script type="text/javascript" src="<?php echo $path; ?>js/lineaApp.js"></script>
		<script type="text/javascript" src="<?php echo $path; ?>js/scrollTo.js"></script>
  </body>
</html>
