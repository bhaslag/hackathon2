'use strict'

angular.module('DukeBox')

  .component('sidebar', {
    templateUrl: './app/js/components/sidebar/sidebar.html',

    controller: function ($scope, $rootScope, PlaylistsService) {
      'ngInject';

      this.$onInit = () => {
        console.log('salut');
        this.urlList = [];
        this.songsList = [];

        $(".button-collapse").sideNav();
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
          if (this.songsList.length > 0) {
            this.songUrl = this.urlList[0];
            this.urlList.splice(0, 1);
            player.playVideo();
          }
        });

        $rootScope.$on('addSongFromYT', (evt, obj) => {
          // console.log(obj);
          // this.songsList.push
        });

        $rootScope.$on('playSongFromYT', (evt, obj) => {
          console.log(obj);
        });

        $rootScope.$on('addSong', (evt, obj) => {
          console.log(obj);
          this.songsList.push(obj);
        });

        $rootScope.$on('playSong', (evt, obj) => {
          console.log(obj);
          this.songUrl = obj.url;
        }); // $rootScope.$on('playSong'

        $rootScope.$on('addPlaylist', (evt, list) => {
          console.log(list);
          for (let i = 0, len = list.length; i < len; i++) {
            this.songsList.push(list[i]);
          }
        })

        $rootScope.$on('playPlaylist', (evt, list) => {
          console.log(list);
          this.songUrl = list[0].url;
          for (let i = 0, len = list.length; i < len; i++) {
            this.urlList.push(list[i].url);
            this.songsList.push(list[i])
          }
        }); // $rootScope.$on('playPlayList'

      }; //this.$onChanges


      // this.songUrl = "https://www.youtube.com/watch?v=" + this.song.id.videoId;

      this.playNow = (obj) => {
        $rootScope.$emit('playSong', obj);
      };

      this.clearList = (player) => {
        this.songsList = [];
        this.urlList = [];
        player.stopvideo();
      }

      this.savePlaylist = (obj) => {
        console.log({
          name: obj.name,
          username: obj.username,
          tags: obj.tag,
          songs: this.songsList
        });
        PlaylistsService.save({
          name: obj.name,
          username: obj.username,
          tags: obj.tag,
          songs: this.songsList
        });
      }
    }
  });