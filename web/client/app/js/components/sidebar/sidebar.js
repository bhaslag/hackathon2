'use strict'

angular.module('DukeBox')

  .component('sidebar', {
    templateUrl: './app/js/components/sidebar/sidebar.html',

    controller: function (PlayListsService, $rootScope, $scope) {
      'ngInject';

      this.currentUser = {
        firstName: 'Denis',
        lastName: 'Loggé',
        fullName: 'Denis Loggé',
        avatar: 'https://cdn.pixabay.com/photo/2016/08/20/05/38/avatar-1606916_1280.png'
      };

      this.$onInit = () => {
        this.playLists = PlayListsService.query();
        this.currentUser.playLists = this.playLists;
        this.songUrl = "https://www.youtube.com/embed/Q8TXgCzxEnw?rel=0";
        console.log(this.currentUser)

        // Initialize collapse button
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
        }); // $rootScope.$on('playSong'

        $rootScope.$on('playPlayList', (evt, list) => {
          this.urlList = [];
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

    }
  });