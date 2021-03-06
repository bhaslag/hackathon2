'use strict'

angular.module('DukeBox')

  .component('youtube', {
    templateUrl: './app/js/components/youtube/youtube.html',
    bindings: {},
    controller: function (YoutubeAPI, $log, $scope, $rootScope) {
      'ngInject';

      this.$onInit = () => {
        $log.log('ready to fire !');
        // console.log($scope);
        // console.log($scope);
        // console.log($scope.$parent.$$nextSibling.$ctrl);
      }

      this.addSong = (obj) => {
        obj.url = obj.id.videoId;
        $rootScope.$emit('addSong', obj);
      }

      this.playSong = (obj) => {
        obj.url = obj.id.videoId;
        $rootScope.$emit('playSong', obj);
      }

      this.searchYoutube = (param) => {
        this.results = [];
        YoutubeAPI.getVideos(param).then((data) => {
          this.results = data.data.items;
        })
      }

      this.initModals = () => {
        $('.modal').modal();
        $('.trigger-data').modal();
        $('.modal-trigger').modal(); // Initialize the modals
        $('select').material_select();
      }

      this.keepSong = (obj) => {
        this.song = obj;
        console.log(this.song);
      }

      this.closeModal = () => {
        $('.modal').modal('close');
      }
    }
  })