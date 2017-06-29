'use strict';

angular.module('DukeBox', [
    "ui.router",
    'LocalStorageModule',
    'ngMessages',
    'ngResource',
    'jtt_youtube',
    'ngSanitize',
    'youtube-embed'
  ])


  .constant('CONSTANTS', {
    authEvent: 'AUTH',
    authUrl: '/api/login_check',
    usersUrl: '/api/users',
    authToken: 'duke-token',
    Youtube_API_KEY: 'AIzaSyCZRnJtykOp7rTuV3W0cm3d8J-JgGYu6lU'
  });