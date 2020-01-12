(function($) {
  $(window).scroll(function() {
      var height = $(window).scrollTop();
      if (height > 500) {
          $('#elevator').fadeIn();
      } else {
          $('#elevator').fadeOut();
      }
  });
  $(document).ready(function() {
      $("#elevator").click(function(event) {
          event.preventDefault();
          $("html, body").animate({ scrollTop: 0 }, "slow");
          return false;
      });

  });
})( jQuery );
