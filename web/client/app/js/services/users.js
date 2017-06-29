'use strict';

angular.module('DukeBox').factory('UsersService', function ($resource) {
  'ngInject';

  let USERS_CHECK_URL = '/api/login_check'

  return $resource(USERS_CHECK_URL + '/:id', {
    id: '@id'
  }, {
    post: {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      }
    },
    'update': {
      method: 'PUT',
      headers: {
        'Content-Type': 'application/json'
      }
    }
  })
})