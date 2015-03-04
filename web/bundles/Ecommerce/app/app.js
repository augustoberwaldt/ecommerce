var app = angular.module('app', ['ngRoute']);

app.config(['$routeProvider',function($routeProvider,$location){

	$routeProvider.
 	when('/',{
 		controller:'homeController', 
 		templateUrl:'home/home.html'
    }).
 	when('/usuarios',{
 		controller:'userController',
 		templateUrl:'usuarios/user.html'
 	}).
 	when('/login',{
 		controller:'loginController', 
 		templateUrl:'login/login.html'
    })
}]);