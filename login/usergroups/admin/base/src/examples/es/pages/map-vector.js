import $ from 'jquery';
import * as Site from 'Site';

$(document).ready(function() {
  Site.run();

  var defaults = Plugin.getDefaults('vectorMap');
  var options = $.extend({}, defaults, {
    markers: [{
      latLng: [1.3, 103.8],
      name: '940 Visits'
    }, {
      latLng: [51.511214, -0.119824],
      name: '530 Visits'
    }, {
      latLng: [40.714353, -74.005973],
      name: '340 Visits'
    }, {
      latLng: [-22.913395, -43.200710],
      name: '1,800 Visits'
    }]
  }, true);

  $('#world-map').vectorMap(options);
});
