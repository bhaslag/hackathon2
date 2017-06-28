'use strict'

angular.module('DukeBox')

  .component('userPlayList', {
    templateUrl: './app/js/components/userPlayList/userPlayList.html',

    controller: function (PlayListsService) {
      'ngInject';

      this.$onInit = () => {
        this.playLists = PlayListsService.query();
        console.log(this
        )
        $('.collapsible').collapsible();

      };

    }
  });