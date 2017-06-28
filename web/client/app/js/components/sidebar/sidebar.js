'use strict'

angular.module('DukeBox')

  .component('sidebar', {
    templateUrl: './app/js/components/sidebar/sidebar.html',

    controller: function (PlayListsService) {
      'ngInject';

      this.currentUser = {
        firstName: 'Denis',
        lastName: 'Loggé',
        fullName: 'Denis Loggé',
        avatar: 'https://cdn.pixabay.com/photo/2016/08/20/05/38/avatar-1606916_1280.png'
      };

      this.$onInit = () => {
        this.playLists = PlayListsService.query();
        this.currentUser.playLists = this.playLists
        console.log(this)

        // Initialize collapse button
        $(".button-collapse").sideNav();
        // Initialize collapsible (uncomment the line below if you use the dropdown variation)
        // $('.collapsible').collapsible();

      };
    }
  });