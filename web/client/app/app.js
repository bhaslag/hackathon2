'use strict';

angular.module('DukeBox', [
    "ui.router",
    'LocalStorageModule',
    'ngMessages',
    'ngResource',
    'ngSanitize',
    'youtube-embed',
    'jtt_youtube'
  ])

  .constant('CONSTANTS', {
    authEvent: 'AUTH',
    authUrl: 'http://localhost:8000/log',
    usersUrl: '/api/users',
    authToken: 'duke-token',
    Youtube_API_KEY: 'AIzaSyCZRnJtykOp7rTuV3W0cm3d8J-JgGYu6lU'
  })

  .directive('repeatDone', () => {
    return function (scope, element, attrs) {
      if (scope.$last) { // all are rendered
        scope.$eval(attrs.repeatDone);
      }
    }
  });