'use strict';

angular.module('DukeBox').service('SongsService', function ($http, $q) {
  'ngInject';

  const API_URL = '/api/songs/';

  this.get = () => {
    return $q((resolve, reject) => {
      $http.get(API_URL).then((response) => {
          resolve(response.data);
        })
        .catch((err) => {
          reject(err);
        });
    });
  }
})