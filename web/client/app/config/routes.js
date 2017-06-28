'use strict';

let Config = function($stateProvider, $urlRouterProvider) {

  const states = [{
    name: "home",
    url: "/",
    component: "home"
  }]

  states.forEach((state) => {
    $stateProvider.state(state)
  })

  $urlRouterProvider.otherwise('/home')
}

const config = [
  "$stateProvider",
  "$urlRouterProvider",
  Config
];

angular.module('DukeBox').config(config);