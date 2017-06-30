'use strict'

angular.module('DukeBox')

  .component('home', {
    templateUrl: './app/js/components/home/home.html',
    bindings: {
      songs: '<',
      playlists: '<',
      tags: '<'
    },
    controller: function ($rootScope) {
      'ngInject';

      this.$onInit = () => {
        console.log(this.songs);
        console.log(this.playlists);
        console.log(this.tags);
      }

      this.addSong = (obj) => {
        $rootScope.$emit('addSong', obj);
      };

      this.playSong = (obj) => {
        $rootScope.$emit('playSong', obj);
      };

      this.addPlaylist = (list) => {
        $rootScope.$emit('addPlaylist', list);
      };

      this.playPlaylist = (list) => {
        $rootScope.$emit('playPlaylist', list);
      }; //this.playPlayList
    }
  })