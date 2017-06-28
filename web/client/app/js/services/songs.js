'use strict';

angular.module('DukeBox').service('SongsService', function ($http, $q) {
  'ngInject';

  const SONGS_URL = '/api/songs/';
  const PLAY_URL = '/api/playlists/';


  this.getSongs = () => {
    return $q((resolve, reject) => {
      $http.get(SONGS_URL).then((response) => {
          resolve(response.data);
        })
        .catch((err) => {
          reject(err);
        });
    });
  }

  this.getPlaylists = () => {
    return $q((resolve, reject) => {
      $http.get(PLAY_URL).then((response) => {
          resolve(response.data);
        })
        .catch((err) => {
          reject(err);
        });
    });
  }
})