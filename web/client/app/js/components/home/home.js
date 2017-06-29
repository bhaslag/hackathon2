'use strict'

angular.module('DukeBox')

  .component('home', {
      templateUrl: './app/js/components/home/home.html',
      bindings: {
        songs: '<',
        playlists : '<'
      },
      controller: function () {
        'ngInject';

        this.$onInit = () => {
          console.log(this.songs)
          console.log(this.playlists)
        }
      }
  })