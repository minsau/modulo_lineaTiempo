'use strict'

var angular_module = angular.module('lineaApp',[]);

angular_module.controller('lineaController',function($scope,$http){

  $scope.elemento1 = {
    titulo : "Titulo 1",
    descripcion : "Descripcion 1",
    imagen : "imagen 1",
    pdf : "pdf 1",
    fecha : "fecha 1"
  };
  $scope.elemento2 = {
    titulo : "Titulo 2",
    descripcion : "Descripcion 2",
    imagen : "imagen 2",
    pdf : "pdf 2",
    fecha : "fecha 2"
  };
  $scope.elemento3 = {
    titulo : "Titulo 3",
    descripcion : "Descripcion 3",
    imagen : "imagen 3",
    pdf : "pdf 3",
    fecha : "fecha 3"
  };
  $scope.elementos = {items:[$scope.elemento1,$scope.elemento2,$scope.elemento3]};
  console.log($scope.elementos);

  /*
  $scope.elementos[1].titulo = "Titulo 2";
  $scope.elementos[1].descripcion = "Descripcion 2";
  $scope.elementos[1].imagen = "imagen 2";
  $scope.elementos[1].pdf = "pdf 2";
  $scope.elementos[1].fecha = "fecha 2";

  $scope.elementos[2].titulo = "Titulo 3";
  $scope.elementos[2].descripcion = "Descripcion 3";
  $scope.elementos[2].imagen = "imagen 3";
  $scope.elementos[2].pdf = "pdf 3";
  $scope.elementos[2].fecha = "fecha 3";
  */
});
