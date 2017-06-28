'use strict'

angular.module('DukeBox')

  .component('signup', {
    templateUrl: './app/js/components/login/signup.html',
    controller: function (AuthService) {
      'ngInject';

      this.$onInit = () => {};//this.$onInit

      this.signup = () => {
        this.user.$save((res) => {
          return AuthService.setToken(res.token);
        }).then(() => {
          $state.go('users');
        }).catch((err) => {
          let message = err.data ? err.data.message || err.data : err;
          let toastContent = `Error: ${message} !`;
          $mdToast.showSimple(toastContent);
        });
      };//this.signup


    }
  });