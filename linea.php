<?php
	session_start();
	$path = 'lib/';

	function consultarTablas($path,$consultas){
		//echo "$consulta";
		$i = 1;
		require_once($path."baseDatos/conexion.php");
		$data = [];
		for($x = 0; $x < count($consultas);$x++){
			$sql = $consultas[$x];
			$res = mysqli_query($conexion,$sql) or die("Error obteniendo tablas".mysqli_error($conexion));
			while($reg = mysqli_fetch_assoc($res)){
				$reg['indiceGeneral'] = $i;
				$reg['fechaSegundos'] = strtotime($reg['fecha_creacion']);
				$data[] = $reg;
				$i++;
				//$data['fin'] = $i;
			}
		}

		return $data;
	}


	$data = json_decode(file_get_contents('php://input'), true);
	$op = $data['op'];
	//$op = $_GET['op'];

if($op == 1){
	$consultas = $data['consultas'];
	//$inicio = $data['inicio'];
  $resultado = consultarTablas($path,$consultas);
  print json_encode($resultado);
}
?>
