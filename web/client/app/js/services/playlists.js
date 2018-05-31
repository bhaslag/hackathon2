'use strict';

angular.module('DukeBox').factory('PlaylistsService', function ($resource) {
  'ngInject';

  let SONGS_URL = 'http://localhost:8000/api/playlists'

  return $resource(SONGS_URL + '/:id', {
    id: '@id'
  }, {
    'save': {
      method: 'POST',
      isArray: true
    }
  })
})