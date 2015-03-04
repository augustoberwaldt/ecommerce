var app= angular.module('app',[]);

app.controller('homeController',function ($scope,$http,$location) {
   var absUrl = $location.absUrl();
   
  alert('home controller');
 });
app.controller('userController',function ($scope,$http,$location) {
 	
  
   alert('userController');
 });
app.controller('loginController',function ($scope,$http,$location) {
 	
   alert('loginController');
 });
