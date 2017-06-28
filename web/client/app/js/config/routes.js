'use strict';

let Config = function ($stateProvider, $urlRouterProvider) {

  const states = [{
    name: "home",
    url: "/",
    component: "home",
    publicRoute: false
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
    publicRoute: true

  }, {
    name: "login.signin",
    url: "/signin",
    component: "signin",
    publicRoute: true

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