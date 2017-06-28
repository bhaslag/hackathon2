'use strict';

angular.module('DukeBox').factory('SongsService', function ($resource) {
  'ngInject';

  let SONGS_URL = '/api/songs'

  return $resource(SONGS_URL + '/:id', {
    id: '@id'
  })
})