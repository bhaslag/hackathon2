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
        // this.playLists = PlayListsService.query();
        // console.log(this
        // )
        console.log(this)
        $('.collapsible').collapsible();
      };


      this.playSong = (url) => {
        $rootScope.$emit('playSong', url);
      }; //this.playSong


      this.playPlayList = (list) => {
        let urlTable = [];

        for (let i = 0, len = list.length; i < len; i++) {
          urlTable.push(list[i].url);
        } //for

        $rootScope.$emit('playPlayList', urlTable);
      }; //this.playPlayList
    }
  });