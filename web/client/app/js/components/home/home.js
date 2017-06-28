'use strict'

angular.module('DukeBox')

  .component('home', {
    templateUrl: './app/js/components/home/home.html',
    bindings: {
      songs: '<'
    },
    controller: function (SongsService) {
      'ngInject';

      this.$onInit = (SongsService) => {

        console.log(this.songs);
      }
    }
  });