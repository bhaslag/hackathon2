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
      }

      this.searchYoutube = (param) => {
        YoutubeAPI.getVideos(param);
      }
    }
  })