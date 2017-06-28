'use strict'

angular.module('DukeBox')

  .component('home', {
      templateUrl: './app/js/components/home/home.html',
      bindings: {
        songs: '<'
      },
      controller: function () {
        'ngInject';

        this.$onInit = () => {

          // SongsService.get().then((songs) => {
          //     this.songs = songs;
          //     console.log(this.songs);
          //   }) 
          console.log(this.songs)
        }
      }
  })