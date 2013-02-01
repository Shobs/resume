$(function() {
  // Do our DOM lookups beforehand
  var nav_container = $("#sidebar");
  var nav = $("nav");
  nav_container.waypoint({
    handler: function(event, direction) {
        nav.toggleClass('sticky', direction=='down');
    }
  });
});
