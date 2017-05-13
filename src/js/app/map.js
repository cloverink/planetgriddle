var parallax = (function(self) {
    var my = self , fn = {};

    var timeoutSelect;
    var currentTemplate;

    fn.IsIE = function() {
      return (navigator.userAgent.match(/msie/i) || navigator.userAgent.match(/trident/i));
    };

    fn.setMapPosition = function(mouse_x, mouse_y) {

        var screen_w = $(window).width();

        if(screen_w <= 1024) {
          return;
        }

        var $mapContainer = $(".map-container");
        var $parallax = $(".parallax", $mapContainer);

        var container_w = $mapContainer.width();
        var container_h = $mapContainer.height();

        var parallax_w = $parallax.width();
        var parallax_h = $parallax.height();

        var dx = (Math.abs(parallax_w - container_w)/2);
        var dy = (Math.abs(parallax_h - container_h)/2);

        var mouse_x = (mouse_x >= 0)? mouse_x: (container_w/2);
        var mouse_y = (mouse_y >= 0)? mouse_y: (container_h/2);

        var kx = dx/(container_w/2);
        var ky = dy/(container_h/2);

        var dmouse_x = mouse_x - (container_w/2);
        var dmouse_y = mouse_y - (container_h/2);

        /*
        $parallax.css({
          left: -(dmouse_x * kx) + ((container_w/2)-(parallax_w/2)),
          top: -(dmouse_y * ky) + ((container_h/2)-(parallax_h/2)),
        });
        */

        var _left = -(dmouse_x * kx) + ((container_w/2)-(parallax_w/2));
            _left = (screen_w > parallax_w)? (screen_w - parallax_w) : _left;
            //_left = (_left >= screen_w)? 0 : _left;

        var _top  = -(dmouse_y * ky) + 0
            _top  = (_top > 0)? 0 : _top;

        $parallax.animate({
          left: _left,
          top: _top,
        }, {queue:false,duration:1, easing: "swing"});
        
    };

    fn.selectCountry = function() {

      if(currentTemplate !== "resources") return; // run only resources page

      var $mapContainer = $(".map-container");      
      $mapContainer.addClass("selected");

      $("a.country", $mapContainer).removeClass("actived");
      $("img.thump", $mapContainer).removeClass("actived");

      $(this).addClass('actived');
      $("img.thump", this).addClass('actived');

      clearTimeout(timeoutSelect);
      timeoutSelect = setTimeout(function() {
        $mapContainer.removeClass("selected");
      }, 2000);

    };

    fn.setScreen = function() {

      var screen_w = $(window).width();

      var $mapContainer = $(".map-container");
      var $parallax = $(".parallax", $mapContainer);

      if(fn.IsIE()) return;

      $mapContainer.removeClass("zoomout");
      $mapContainer.removeClass("zoomin");

      if(screen_w <= $parallax.width() * 0.9) {
        $mapContainer.addClass("zoomout");
      } else {
        $mapContainer.addClass("zoomin");
      }

    };

    fn.init = function() {

      var $mapContainer = $(".map-container");

      $mapContainer.on("mousemove", function(e){

        if($(this).hasClass("selected")) return;

        var mouse_x = e.pageX;
        var mouse_y = e.pageY;

        fn.setMapPosition(mouse_x, mouse_y);

      });

      $mapContainer.on("mouseleave", function(e){

      });

      $(window).on('resize', function(){
        fn.setScreen();
        fn.setMapPosition();


      });

      fn.setScreen();
      fn.setMapPosition();

      $("a.country", $mapContainer).on("click", fn.selectCountry);

    };

    my.callMap = function() {
      fn.setMapPosition();
    },

    my.init = function() {

      currentTemplate = $("body").data("template");
        
      $(function(){
        fn.init();
      });
        
    };

    return my;

})(parallax || {});


parallax.init();