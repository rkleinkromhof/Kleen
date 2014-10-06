'use strict';

var kleen = angular.module("kleen", [
  'kleenControllers',
  'relativeDate',
  'firebase',
  'ngRoute'
  ]);

kleen.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/tasks', {
        templateUrl: 'partials/task-list.html',
        controller: 'TaskListCtrl'
      }).
      /*when('/teams/:teamId', {
        templateUrl: 'partials/team-detail.html',
        controller: 'TeamDetailCtrl'
      }).*/
      /*when('/registration', {
        templateUrl: 'partials/team-registration.html',
        controller: 'TeamRegistrationCtrl'
      }).*/
      otherwise({
        redirectTo: '/tasks'
      });
  }]);
