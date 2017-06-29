'use strict'

angular.module('DukeBox')

  .component('signin', {
    templateUrl: './app/js/components/login/signin.html',
    controller: function (AuthService, $state, $window, CONSTANTS) {
      'ngInject';

      this.$onInit = () => {}; //this.$onInit

      this.signin = () => {
        console.log(JSON.stringify(this.user));
        // Local authentication mode
        AuthService.login(JSON.stringify(this.user)).then(() => {}).catch((err) => {
          // $mdToast.showSimple(`Error : ${err} !`);
          Materialize.toast(`Error : ${err} !`, 6000)
        });
      }; //this.signin


    }
  });