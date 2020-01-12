<?php get_header(); ?>
</head>

<body>
  <div id="page" class="container">

    <?php get_template_part('nav') ?>

    <article class="details">

      <?php if( have_rows('web_page') ): ?>
          <?php while( have_rows('web_page') ): the_row();

          $url = get_sub_field('url');
          $preview = get_sub_field('preview');

          if($url):
          ?>

          <div class="image float-left col-12 col-lg-6 wrapper" id="external">
            <iframe name="frame" id="frame" srcdoc="
              <style>
                body{margin: 0;}
                img{width: 100%;}
                ::-webkit-scrollbar {width: .5rem;}
                ::-webkit-scrollbar-track {background: rgba(255,255,255,0.2);}
                ::-webkit-scrollbar-thumb {
                  background: rgba(128,128,128,.5);
                  opacity: .5;
                  border-radius: .5rem;
                }
                ::-webkit-scrollbar-thumb:hover {background: rgb(128,128,128);}
              </style>
              <a href='<?php echo $url; ?>' target='frame'>
                <img src='<?php echo $preview['url'] ?>' alt='Website Preview' title='Click to load preview' />
              </a>
              " src="<?php echo $url; ?>">
              <img src="<?php echo $preview['url'] ?>" alt="Website preview" title="Your browser does not support the preview" />
            </iframe>
          </div>

        <?php endif; endwhile; endif;

        $bigimg = get_field('main_image');

        if($bigimg):
        ?>

        <div class="image float-left col-12 col-lg-6">
          <a href="<?php echo $bigimg['url'] ?>" data-toggle="lightbox" data-gallery="page">
            <img src="<?php echo $bigimg['url'] ?>" alt="<?php echo $bigimg['alt'] ?>" />
          </a>
        </div>

      <?php endif; ?>

      <div class="float-left col-12 col-lg-6 float-lg-right">
        <h2><?php the_title() ?></h2>
        <?php the_field('text') ?>
      </div>

      <?php if( get_field('spacer') ): ?>
      <div class="col-12 float-left"></div>
      <?php
        endif;
        if( have_rows('post_images') ): while( have_rows('post_images') ): the_row();
        // vars
        $image = get_sub_field('image');
        $cols = get_sub_field('cols');
      ?>

      <div class="image float-left col-12 <?php echo $cols ?>">
        <a href="<?php echo $image['url'] ?>" data-toggle="lightbox" data-gallery="page">
          <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" />
        </a>
      </div>

      <?php endwhile; endif; ?>

      <?php
      $ptags = array("<p>", "</p>");
      $code = get_field('other');

      if( $code ):
        echo str_replace($ptags, '', $code);
      endif;
      ?>


    </article>

  <?php get_footer(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/ekko-lightbox.min.js"></script>
  <script>
  (function($) {
  	$(document).on('click', '[data-toggle="lightbox"]', function(event) {
  							event.preventDefault();
  							$(this).ekkoLightbox();
  					});
  })( jQuery );
  </script>
</body>

</html>
