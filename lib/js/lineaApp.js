'use strict'

var angular_module = angular.module('lineaApp',[]);

angular_module.controller('lineaController',function($scope,$http){

 ///++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  /// Si por ejemplo quieres que en una tabla el nombre completo sea el titulo, la consulta podria ser:
  //SELECT CONCAT(nombre," ",aPaterno," ",aMaterno) as titulo FROM Usuario;
  // y así nos evitamos problemas de validaciones
  var consultas = [
    "SELECT * FROM Tabla2",
    "SELECT * FROM Tabla3",
    "SELECT * FROM Tabla1",
    "SELECT * FROM Tabla4",
    "SELECT * FROM Tabla5",
    "SELECT * FROM Tabla6"
  ];

  $http.post('linea.php',{op: 1,consultas: consultas}).success(function(data){
    $scope.datos = data;
//    console.log(data);
  });

  $scope.ir = function(id){
    $.scrollTo("#timeline");
    console.log(id);
    $("#timeline").scrollTo("#"+id,500);
    $("#registrosTabla").scrollTo("#"+id,500);
    $("#"+id).addClass("panel-success");
    $("#"+id).addClass("panel-default");
  }
});
