'use strict';

angular.module('DukeBox').factory('TagsService', function ($resource) {
  'ngInject';

  let TAGS_URL = '/api/tags'

  return $resource(TAGS_URL + '/:id', {
    id: '@id'
  })
})