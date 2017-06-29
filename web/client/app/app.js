'use strict';

angular.module('DukeBox', [
    "ui.router",
    'LocalStorageModule',
    'ngMessages',
    'ngResource'
  ])


  .constant('CONSTANTS', {
    authEvent: 'AUTH',
    authUrl: 'http://localhost:8000/log',
    usersUrl: '/api/users',
    authToken: 'duke-token',
  });