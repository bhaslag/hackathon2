'use strict'

angular.module('DukeBox')

  .component('sidebar', {
    templateUrl: './app/js/components/sidebar/sidebar.html',

    controller: function (PlayListsService, $rootScope) {
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
        this.songUrl= "https://www.youtube.com/embed/Q8TXgCzxEnw?rel=0";
        console.log(this.currentUser)

        // Initialize collapse button
        $(".button-collapse").sideNav();
        // Initialize collapsible (uncomment the line below if you use the dropdown variation)
        // $('.collapsible').collapsible();

      };

      this.$onChanges = () => {
        $rootScope.$on('playSong', (evt, url) => {
          this.songUrl = url;
        }); // $rootScope.$on('playSong'

      }; //this.$onChanges

    }
  });