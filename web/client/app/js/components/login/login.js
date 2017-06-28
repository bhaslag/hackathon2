'use strict'

angular.module('DukeBox')

  .component('login', {
    template: '<ui-view></ui-view>',
    controller: function () {
      'ngInject';

      this.$onInit = () => {
        AuthService.logout();
        
      };//this.$onInit
    }
  });