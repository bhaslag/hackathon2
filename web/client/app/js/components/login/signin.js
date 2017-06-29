'use strict'

angular.module('DukeBox')

  .component('signin', {
    templateUrl: './app/js/components/login/signin.html',
    controller: function (AuthService, UsersService, $state, $window, CONSTANTS) {
      'ngInject';

      this.$onInit = () => {}; //this.$onInit

      this.signin = () => {
        // Local authentication mode
        let new_user = {
          'email': this.user.email,
          'password': this.user.password
        };
        console.log(new_user);

        AuthService.login(this.user).then(() => {}).catch((err) => {
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