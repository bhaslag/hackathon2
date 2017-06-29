'use strict'

angular.module('DukeBox')

  .component('youtube', {
    templateUrl: './app/js/components/youtube/youtube.html',
    bindings: {},
    controller: function (YoutubeAPI, $log, $scope, $rootscope) {
      'ngInject';

      this.$onInit = () => {
        $log.log('ready to fire !');
        console.log($scope);
        console.log($rootScope);
      }

      this.searchYoutube = (param) => {
        YoutubeAPI.getVideos(param).then((data) => {
          this.results = data.data.items;
          console.log(this.results);
        })
      }
    }
  })