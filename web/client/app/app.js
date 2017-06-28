'use strict';

angular.module('DukeBox', [
    "ui.router",
    'LocalStorageModule',
    'ngMessages'
  ])


  .constant('CONSTANTS', {
    authEvent: 'AUTH',
    authUrl: '/api/auth',
    usersUrl: '/api/users',
    authToken: 'mean-token',
  });