  var app = angular.module('app', ['ngRoute']);

  app.config(function($routeProvider) {
    $routeProvider

    .when('/', {
      templateUrl: 'pages/home.php',
      controller: 'mainController'
    })

    .when('/personal', {
      templateUrl: 'pages/personal.php',
      controller: 'personalController'
    })

    .when('/contacts', {
      templateUrl: 'pages/contacts.php',
      controller: 'contactsController'
    });
  });

  app.controller('mainController', function($scope) {
    $scope.message = 'mainController';
  });

  app.controller('personalController', function($scope) {
    $scope.message = 'personalController';
  });

  app.controller('contactsController', function($scope) {
    $scope.message = 'contactsController';
  });