'use strict'

angular.module('DukeBox')

  .component('header', {
    templateUrl: './app/components/header/header.html',
    controller: function () {
      this.$onInit = () => {
        this.states = [{
          name: 'home',
          displayName: 'Home'
        }]
      };
    }
  });