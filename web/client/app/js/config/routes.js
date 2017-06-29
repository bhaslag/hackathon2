'use strict';

let Config = function ($stateProvider, $urlRouterProvider, SongsService) {

  const states = [{
    name: "home",
    url: "/",
    component: "home",
    publicRoute: true,
    // resolve: {
    //   songs: function (SongsService) {
    //     return SongsService.getSongs();
    //   },
    //   playlists: function (SongsService) {
    //     return SongsService.getPlaylists();
    //   }
    // }
  }, {
    name: "sidebar",
    url: "/sidebar",
    component: "sidebar"
  }, {
    name: "login",
    url: "",
    component: "login",
    abstract: true
  }, {
    name: "login.signup",
    url: "/signup",
    component: "signup",
    publicRoute: false

  }, {
    name: "login.signin",
    url: "/signin",
    component: "signin",
    publicRoute: false

  }]

  states.forEach((state) => {
    $stateProvider.state(state)
  })

  $urlRouterProvider.otherwise('/main')
}

const config = [
  "$stateProvider",
  "$urlRouterProvider",
  Config
];

angular.module('DukeBox').config(config);