'use strict'

angular.module('DukeBox')

  .component('header', {
    templateUrl: './app/components/header/header.html',
    controller: function () {
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