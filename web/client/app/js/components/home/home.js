'use strict'

angular.module('DukeBox')

  .component('home', {

    templateUrl: './app/js/components/home/home.html',
    bindings: {
      tags: '<',
      songs: '<',
      playlists: '<'
    },
    controller: function () {
      'ngInject';

      this.$onInit = () => {
        $log.log('youre at home !');
      }
    }
  })