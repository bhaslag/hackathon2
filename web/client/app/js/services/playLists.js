'use strict';

angular.module('DukeBox').factory('PlayListsService', function ($resource) {
  'ngInject';

  let SONGS_URL = '/api/playlists'

  return $resource(SONGS_URL + '/:id', {
    id: '@id'
  })
})