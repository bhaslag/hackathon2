'use strict'

angular.module('DukeBox')

  .component('sidebar', {
    templateUrl: './app/js/components/sidebar/sidebar.html',

    controller: function ($scope, $rootScope, PlaylistsService) {
      'ngInject';

      this.$onInit = () => {
        this.urlList = [];
        this.songsList = [];
        this.index = 1;

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
            this.songUrl = this.songsList[this.index].url;
            this.index == this.songsList.length - 1 ? this.index = 0 : this.index++;
            player.playVideo();
          }
        });

        $rootScope.$on('addSong', (evt, obj) => {
          console.log(obj);
          this.songsList.push(obj);
        });

        $rootScope.$on('playSong', (evt, obj) => {
          console.log(obj);
          this.songUrl = obj.url;
          if (this.songsList.indexOf(obj) >= 0) {
            this.index = this.songsList.indexOf(obj) + 1;
          }
        }); // $rootScope.$on('playSong'

        $rootScope.$on('addPlaylist', (evt, list) => {
          console.log(list);
          for (let i = 0, len = list.length; i < len; i++) {
            this.songsList.push(list[i]);
          }
        })

        $rootScope.$on('playPlaylist', (evt, list) => {
          console.log(list);
          this.clearList();
          this.index = 1;
          this.songUrl = list[0].url;
          for (let i = 0, len = list.length; i < len; i++) {
            this.songsList.push(list[i])
          }
        }); // $rootScope.$on('playPlayList'

      }; //this.$onChanges

      this.playNow = (obj) => {
        $rootScope.$emit('playSong', obj);
      };

      this.clearList = () => {
        this.songsList = [];
      };

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
        }, (err) => {
          if (err) {
            reject(err)
          } else {
            Materialize.toast('Finally someone with good taste around here ;)', 7000)
            $('.modal').modal('close');
          }
        });
      }
    }
  });