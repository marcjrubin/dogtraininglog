/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var homeApp = angular.module('homeApp', ['ngRoute']);

homeApp.config(['$routeProvider', function($routeProvider) {
        $routeProvider.
            when('/', {
                templateUrl:'index.php'
                //controller:'logController'
            }).
            when('/about', {
                templateUrl:'About.php'
            }).
//            when('/entrylist/:listID', {
//                templateUrl:'partials/EntryListDetails.html',
//                controller:'logDetailsController'
//            }).
            otherwise({
                redirectTo:'/home'
            });
}]);
