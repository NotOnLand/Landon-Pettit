<script src="js/isotope.pkgd.min.js"></script>
<script src="js/packery-mode.pkgd.min.js"></script>
<script>
(function($) {
	  $('.image').click(function() {
    if ($(window).width() <= 991) {
      if (!$(this).next().hasClass('clicked')) {
        $('.clicked').removeClass('clicked');
        $(this).next().addClass('clicked');
      }
    }
  });
  var $works = $('.works').isotope({
    // options
    itemSelector: '.work-item',
    layoutMode: 'packery',
    packery: {
      gutter: 15
    },
    filter: '.front',
    getSortData: {
      name: '.name',
      date: function(itemElem) {
        var date = $(itemElem).find('.date').text();
        return parseInt(30000000 - date);
      }
    }
  });

  var currentFilter = $('#filter1');
  var currentSort = $('#sort1');
  var ascending = 'false';
  $(".dropdown-menu a.filter").click(function() {
    $(".btn:first-child").html($(this).text() + ' <span class="caret"></span>');
    var filterValue = $(this).attr('data-filter');
    $works.isotope({
      filter: filterValue,
      sortBy: currentSort.attr('data-sortby'),
      sortAscending: ascending
    });
    currentFilter.removeClass('act-filter');
    $(this).addClass('act-filter');
    currentFilter = $(this);
  });
  $(".dropdown-menu a.sort").click(function() {
    var sortValue = $(this).attr('data-sortby');
    if ($(this).hasClass('ascending')) {
      ascending = false;
      $(this).removeClass('ascending');
      $(this).addClass('descending');
    } else {
      // if($(this).hasClass('descending'))
      ascending = true;
      $(this).removeClass('descending');
      $(this).addClass('ascending');
    }
    $works.isotope({
      sortBy: sortValue,
      sortAscending: ascending
    });
    currentSort.removeClass('act-sort');
    $(this).addClass('act-sort');
    currentSort = $(this);
  });
})( jQuery );
</script>
