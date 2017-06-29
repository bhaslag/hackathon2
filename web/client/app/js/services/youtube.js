'use strict';

angular.module('DukeBox').service('YoutubeAPI', function (youtubeFactory, CONSTANTS) {

  this.getVideos = (param) => {
    return youtubeFactory.getVideosFromSearchByParams({
      q: param,
      key: CONSTANTS.Youtube_API_KEY,
      order: 'relevance',
      maxResults: 20
    })
  }
})