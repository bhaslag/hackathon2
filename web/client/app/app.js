'use strict';

angular.module('DukeBox', [
    "ui.router",
    'LocalStorageModule',
    'ngMessages',
    'ngResource'
  ])


  .constant('CONSTANTS', {
    authEvent: 'AUTH',
    authUrl: '/login_check',
    usersUrl: '/api/users',
    authToken: 'duke-token',
  });