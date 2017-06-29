'use strict'

angular.module('DukeBox')

  .component('signin', {
    templateUrl: './app/js/components/login/signin.html',
    controller: function (AuthService, $state, $window, CONSTANTS) {
      'ngInject';

      this.$onInit = () => {}; //this.$onInit

      this.signin = () => {
        console.log(this.user)
      }; //this.signin


    }
  });