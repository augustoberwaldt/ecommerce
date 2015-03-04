
 var app = angular.module('app', ['ngRoute','ngResource']);
 alert('dvds');
 app.config(['$routeProvider',function($routeProvider){
 
 $routeProvider.
 	when('views/',{
 		controller:'homeController', 
 		templateUrl:'/home/home.html'
    }).
 	when('usuarios/',{
 		controller:'userController',
 		templateUrl:'/usuarios/user.html'
 	}).
 	when('/login',{
 		controller:'loginController', 
 		templateUrl:'login.html'
    }).
  	otherwise(
  		{
  			redirectTo:'/scascascas'
         }
       );
}]);