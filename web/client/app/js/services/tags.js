'use strict';

angular.module('DukeBox').factory('TagsService', function ($resource) {
  'ngInject';

  let TAGS_URL = 'http://localhost:8000/api/tags'

  return $resource(TAGS_URL + '/:id', {
    id: '@id'
  })
})