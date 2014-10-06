'use strict';

var kleenControllers = angular.module('kleenControllers', []);

kleenControllers.controller('TaskListCtrl', ['$scope', '$firebase', 
  function($scope, $firebase) {
    var fbase = new Firebase('https://kleen.firebaseio.com/tasks');
    $scope.tasks = $firebase(fbase);
  }
]);

/*kleenControllers.controller('TeamRegistrationCtrl', ['$scope', '$firebase', 
  function($scope, $firebase) {
    var fbase = new Firebase('https://kleen.firebaseio.com/registration');
    $scope.registrations = $firebase(fbase);
    $scope.registration = {
      contact: {},
      players: [{},{},{},{},{},{}]
    }

    $scope.register = function(registration) {
      if (registration.teamname) {
        registration.registered_on = Date.now();
        $scope.registrations.$add(registration);
        // TODO show 'thank you ...' message and redirect to ...?
      }
    };
  }
]);*/