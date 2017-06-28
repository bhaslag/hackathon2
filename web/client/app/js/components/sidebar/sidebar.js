'use strict'

angular.module('DukeBox')

  .component('sidebar', {
    templateUrl: './app/js/components/sidebar/sidebar.html',
    controller: function () {
      'ngInject';

      this.$onInit = () => {

        // Initialize collapse button
        $(".button-collapse").sideNav();
        // Initialize collapsible (uncomment the line below if you use the dropdown variation)
        // $('.collapsible').collapsible();


        this.states = [{
          name: 'sidebar',
          displayName: 'sidebar'
        }]
      };
    }
  });