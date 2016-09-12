'use strict'

var angular_module = angular.module('lineaApp',[]);

angular_module.controller('lineaController',function($scope,$http){

 //var fin = 0;
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
});
