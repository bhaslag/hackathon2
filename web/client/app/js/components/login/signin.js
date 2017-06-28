'use strict'

angular.module('DukeBox')

  .component('signin', {
    templateUrl: './app/js/components/login/signin.html',
    controller: function () {
      'ngInject';

      this.$onInit = () => {};//this.$onInit

      this.signin = () => {
        // Local authentication mode
        AuthService.login(this.user).then(() => {
          $state.go('users');
        }).catch((err) => {
          $mdToast.showSimple(`Error : ${err} !`);
        });
      };//this.signin


    }
  });