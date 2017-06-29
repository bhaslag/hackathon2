'use strict'

angular.module('DukeBox')

  .component('home', {

    templateUrl: './app/js/components/home/home.html',
    bindings: {
      songs: '<',
      playlists: '<'
    },
    controller: function (YoutubeAPI, $log) {
      'ngInject';

      this.$onInit = () => {
        $log.log('ready to fire !');
        console.log(this.songs);
        console.log(this.playlists);
        console.log(this.tags);
      }

      this.searchYoutube = (param) => {
        YoutubeAPI.getVideos(param);
      }
    }
  })