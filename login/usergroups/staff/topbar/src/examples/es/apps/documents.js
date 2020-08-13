// (function(document, window, $) {
//   'use strict';
//   window.AppDocuments = App.extend({
//     scrollHandle: function() {
//       $('body').scrollspy({
//         target: '#articleSticky',
//         offset: 80
//       });
//     },
//     run: function(next) {
//       this.scrollHandle();
//
//       next();
//     }
//   });
//
//   $(document).ready(function() {
//     AppDocuments.run();
//     $('#articleSticky').Stickyfill();
//
//     $(window).on('resize orientationchange', function() {
//       if ($(this).width() > 767) {
//         Stickyfill.init();
//       } else {
//         Stickyfill.stop();
//       }
//     }).resize();
//   });
// 

import $ from 'jquery';

$(document).ready(function() {
  AppDocuments.run();
});
