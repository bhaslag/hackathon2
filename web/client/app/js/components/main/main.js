'use strict'

angular.module('DukeBox')

  .component('main', {
    templateUrl: './app/js/components/main/main.html',
    controller: function () {
      'ngInject';

      this.$onInit = () => {
        console.log('hello');
      };
    }
  });