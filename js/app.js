'use strict';


// Declare app level module which depends on filters, and services
angular.module('myApp', [
    'myApp.filters',
    'myApp.services',
    'myApp.directives',
    'myApp.controllers',
    'ngRoute'
]).
config(['$routeProvider', '$locationProvider',
    function($routeProvider, $locationProvider) {
        $routeProvider.when('/', {
            templateUrl: 'partials/home.html',
            controller: 'HomeCtrl'
        })
        $routeProvider.when('/stock', {
            templateUrl: 'partials/stock.html',
            controller: 'StockCtrl'
        })
        $routeProvider.when('/building', {
            templateUrl: 'partials/building.html',
            controller: 'BuildingCtrl'
        })
        $routeProvider.when('/type', {
            templateUrl: 'partials/type.html',
            controller: 'TypeCtrl'
        })
        $routeProvider.when('/view1', {
            templateUrl: 'partials/partial1.html',
            controller: 'MyCtrl1'
        });
        $routeProvider.when('/view2', {
            templateUrl: 'partials/partial2.html',
            controller: 'MyCtrl2'
        });

        $locationProvider
            .html5Mode(false);

    }
]);