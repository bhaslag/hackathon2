'use strict'

angular.module('DukeBox')

  .component('home', {
<<<<<<< HEAD
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

        this.playSong = (url) => {
          $rootScope.$emit('playSong', url);
        }

        this.playPlayList = (list) => {
          let urlTable = [];

          for (let i = 0, len = list.length; i < len; i++) {
            urlTable.push(list[i].url);
          } //for

          $rootScope.$emit('playPlayList', urlTable);
        }; //this.playPlayList
=======

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
>>>>>>> sacha-dev
      }
    }
  })