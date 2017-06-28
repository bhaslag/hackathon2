'use strict'

angular.module('DukeBox')

  .component('sidebar', {
    templateUrl: './app/components/header/header.html',
    controller: function () {
      'ngInject';

      this.$onInit = () => {

        // Initialize collapse button
        $(".button-collapse").sideNav();
        // Initialize collapsible (uncomment the line below if you use the dropdown variation)
        // $('.collapsible').collapsible();


        this.states = [{
          name: 'home',
          displayName: 'Home'
        }]
      };
    }
  });