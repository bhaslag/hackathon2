'use strict';

angular.module('DukeBox', [
    "ui.router",
    'LocalStorageModule',
    'ngMessages',
    'ngResource',
    'ngSanitize',
    'youtube-embed'
  ])


  .constant('CONSTANTS', {
    authEvent: 'AUTH',
    authUrl: '/api/login_check',
    usersUrl: '/api/users',
    authToken: 'duke-token',
  });