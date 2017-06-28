'use strict'

angular.module('DukeBox')

  .component('login', {
    template: '<ui-view></ui-view>',
    controller: function (AuthService) {
      'ngInject';

      this.$onInit = () => {
        AuthService.logout();
        
      };//this.$onInit
    }
  });