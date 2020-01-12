<?php get_header(); ?>
</head>

<body>
  <div id="page" class="container">

    <?php get_template_part('nav') ?>

    <div class="dropdown row col-12" id="filter">
      <button class="btn btn-outline-light dropdown-toggle btn-large btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown">
        <i class="icon"></i>
      </button>
      <div class="dropdown-menu">
        <h6 class="dropdown-header">Filter</h6>
        <a class="dropdown-item filter act-filter" href="#" data-filter=".front" id="filter1">Top</a>
        <a class="dropdown-item filter" href="#" data-filter=".all">All</a>
        <a class="dropdown-item filter" href="#" data-filter=".web">Web</a>
        <a class="dropdown-item filter" href="#" data-filter=".print">Print</a>
        <a class="dropdown-item filter" href="#" data-filter=".photo">Photography</a>
        <div class="dropdown-divider"></div>
        <h6 class="dropdown-header">Sort by</h6>
        <a class="dropdown-item sort" href="#" data-sortby="date" id="sort1">Date</a>
        <a class="dropdown-item sort" href="#" data-sortby="name">Name</a>
      </div>
    </div>

    <article class="works row">

      <?php
      $args = array(
        'posts_per_page' => -1,
        'post_type'		=> 'work',
        'meta_key'		=> 'order',
        'orderby'	=> 'meta_value_num',
        'order' => 'ASC'
      );
      $query = new WP_Query($args);

      if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

      $terms = get_field('tags');
      $date = get_field('date');
      $desc = get_field('description');

    	?>

      <div class="work-item <?php if(get_field('wide')){echo 'work-item--width2 ';} if($terms): foreach($terms as $term): echo esc_html($term->name).' '; endforeach; endif; ?> ">
        <div class="image">
          <?php the_post_thumbnail('medium_large'); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="moreinfo">
        <div class="caption">
            <h3 class="name"><?php the_title(); ?></h3>
            <span class="date"><?php echo $date; ?></span>
            <p><?php echo $desc; ?></p>
            More Info
        </div>
        </a>
      </div>

      <?php endwhile; endif; ?>


    </article>



  <?php get_footer(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/isotope.pkgd.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/packery-mode.pkgd.min.js"></script>
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
</body>

</html>
