'use strict'

angular.module('DukeBox')

  .component('signin', {
    templateUrl: './app/js/components/login/signin.html',
    controller: function (AuthService, $state, $window, CONSTANTS) {
      'ngInject';

      this.$onInit = () => {}; //this.$onInit

      this.signin = () => {
        console.log(this.user)
        // // Local authentication mode
        // AuthService.login(this.user).then(() => {
        //   $state.go('users');
        // }).catch((err) => {
        //   // $mdToast.showSimple(`Error : ${err} !`);
        //   Materialize.toast(`Error : ${err} !`, 6000)
        // });
      }; //this.signin


    }
  });