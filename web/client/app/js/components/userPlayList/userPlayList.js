'use strict'

angular.module('DukeBox')

  .component('userPlayList', {
    templateUrl: './app/js/components/userPlayList/userPlayList.html',

    bindings: {
      playLists: '<'
    },

    controller: function (PlayListsService, $rootScope) {
      'ngInject';

      this.$onInit = () => {
        console.log(this)
        $('.collapsible').collapsible();
      };

      
      this.playSong = (url) => {
        $rootScope.$emit('playSong', url);
      }; //this.playSong

    }
  });