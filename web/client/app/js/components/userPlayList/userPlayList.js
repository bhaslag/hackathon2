'use strict'

angular.module('DukeBox')

  .component('userPlayList', {
    templateUrl: './app/js/components/userPlayList/userPlayList.html',

    controller: function () {
      'ngInject';

      this.$onInit = () => {
        $('.collapsible').collapsible();
      };

      this.playlists = [{
        title: 'soirée hackathon',
        style: 'dance',
        id: 1,
        songs: [{
            title: 'YOlO',
          },
          {
            title: 'YAlA',
          },
          {
            title: 'YIlI',
          }
        ]
      }, {
        title: 'marre du hackahton',
        style: 'punk',
        id: 2,
        songs: [{
            title: 'YOlO',
          },
          {
            title: 'YAlA',
          },
          {
            title: 'YIlI',
          }
        ]
      }, {
        title: 'OUUUUAIAIAIIAIAIAS',
        style: 'pogo',
        id: 3,
        songs: [{
            title: 'YOlO',
          },
          {
            title: 'YAlA',
          },
          {
            title: 'YIlI',
          }
        ]
      }];
    }
  });