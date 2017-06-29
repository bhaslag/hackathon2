'use strict'

angular.module('DukeBox')

  .component('sidebar', {
    templateUrl: './app/js/components/sidebar/sidebar.html',

    controller: function ($scope, $rootScope) {
      'ngInject';

      this.$onInit = () => {
        console.log('salut');
        this.urlList = [];
        this.songsList = [];

        $(".button-collapse").sideNav();
        // Initialize collapsible (uncomment the line below if you use the dropdown variation)

        // $('.collapsible').collapsible();

        $('.modal').modal();
        $('.trigger-modal').modal();

      };

      this.close = () => {
        $('#modal1').modal('close');
      }

      this.$onChanges = () => {

        $scope.$on('youtube.player.ready', ($event, player) => {
          // play it again
          player.playVideo();
        });

        $scope.$on('youtube.player.ended', ($event, player) => {
          console.log(this.urlList)
          if (this.urlList.length > 0) {
            this.songUrl = this.urlList[0];
            this.urlList.splice(0, 1);
            player.playVideo();
          }
        });

        $rootScope.$on('playSong', (evt, url) => {
          this.songUrl = url;
          console.log(this.songUrl)
        }); // $rootScope.$on('playSong'

        $rootScope.$on('playPlayList', (evt, list) => {
          for (let i = 0, len = list.length; i < len; i++) {
            if (i == 0) {
              this.songUrl = list[i];
            } else {
              this.urlList.push(list[i]);
            }
          }
          console.log(this.urlList)
        }); // $rootScope.$on('playPlayList'

      }; //this.$onChanges

      this.catchSong = (obj) => {
        this.song = obj;
        console.log(this.song);
        this.songUrl = "https://www.youtube.com/watch?v=" + this.song.id.videoId;
        this.urlList.push(this.songUrl);
        this.songsList.push(this.song);
      }

      this.playNow = (obj) => {
        $rootScope.$emit('playSong', obj.id.videoId);
      }

      this.clearList = (player) => {
        this.songsList = [];
        this.urlList = [];
      }
    }
  });