'use strict';

let Config = function ($stateProvider, $urlRouterProvider, SongsService, TagsService) {

  const states = [{
    name: "home",
    url: "/",
    component: "home",
    publicRoute: true,
    resolve: {
      songs: function (SongsService) {
        return SongsService.getSongs();
      },
      playlists: function (SongsService) {
        return SongsService.getPlaylists();
      },
      tags : function (TagsService) {
        return TagsService.query();
      }
    }},
    {
      name: "youtube",
      url: "/search",
      component: "youtube",
      publicRoute: true
    }
  ]

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