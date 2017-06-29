'use strict'

angular.module('DukeBox')

  .component('signin', {
    templateUrl: './app/js/components/login/signin.html',
    controller: function (AuthService, UsersService, $state, $window, CONSTANTS) {
      'ngInject';

      this.$onInit = () => {}; //this.$onInit

      this.signin = () => {
        console.log(this.user);
        // Local authentication mode
        AuthService.login(this.user).then(() => {
            $state.go('home')
        }).catch((err) => {
          // $mdToast.showSimple(`Error : ${err} !`);
          Materialize.toast(`Error : ${err} !`, 6000)
        });

      }; //this.signin

      // this.signin = () => {
      //   console.log(this.user);
      //   // Local authentication mode
      //   UsersService.save(this.user).then(() => {
      //     console.log(this.user);
      //   }).catch((err) => {
      //     // $mdToast.showSimple(`Error : ${err} !`);
      //     Materialize.toast(`Error : ${err} !`, 6000)
      //   });
      // }; //this.signin

    }
  });