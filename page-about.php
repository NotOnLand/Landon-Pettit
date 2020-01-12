<?php get_header(); ?>
</head>

<body>
  <div id="page" class="container">

    <?php get_template_part('nav') ?>

    <article class="about">

      <section class="bio">
        <h2 class="col-12 col-md-6 float-left mt-4">About Me</h2>
        <div class="d-none d-lg-block float-right col-1">&nbsp;</div>
        <picture class="col-12 col-md-5 float-right col-lg-2">
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/me.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/images/small/me.jpg" alt="Me and my dog" />
        </picture>
        <p class="col-12 col-md-6 float-left col-lg-7">Hi, I'm Landon. I'm a recent graduate from West Virginia University. I got my BFA in Graphic Design with a minor in Photography. I love dogs, folklore, and my fiancée Sara.</p>
      </section>

      <h2 class="col-10 offset-lg-1 mt-4 float-left">Resume
        <a href="<?php echo get_template_directory_uri(); ?>/Landon_Pettit_resume.pdf" target="_blank" class="btn btn-success ml-4 small"><i class="fas fa-download"></i></a></h2>

      <section class="resume col-12 offset-lg-1 col-lg-11 float-left">
        <section>
          <h4>Education</h4>
          <section>
            <h5>West Virginia University</h5>
            <ul>
              <li>College of Creative Arts
              <br><small>Graphic Design (2017–2019)</small></li>
              <li class="mt-3">Benjamin Statler College of Engineering and Mineral Resources
              <br><small>Computer Science (2014–2017)</small></li>
            </ul>
          </section>

        <section>
          <h4>Work</h4>
          <section>
            <h5>SustainU Clothing</h5>
            <ul>
              <li>Graphic Design Intern (March–December 2019)</li>
            </ul>
          </section>

          <section>
            <h5>WVU College of Creative Arts</h5>
            <ul>
              <li>Office Assistant (2017–2019)</li>
            </ul>
          </section>
        </section>

        <section>
          <h4>Languages</h4>
          <ul>
            <li>HTML5</li>
            <li>CSS3, SASS</li>
            <li>Javascript</li>
            <li>PHP, Wordpress</li>
            <li>Basic Latin & French</li>
          </ul>
        </section>
      </section>

      <section>
            <h4>Skills & Proficiencies</h4>
            <section>
              <h5>Adobe Creative Suite</h5>
              <ul>
                <li>Photoshop</li>
                <li>Illustrator</li>
                <li>Indesign</li>
                <li>Lightroom</li>
                <li>XD</li>
                <li>Premiere</li>
              </ul>
            </section>

            <section>
              <h5>Microsoft Office</h5>
              <ul>
                <li>Word</li>
                <li>Excel</li>
                <li>Access</li>
                <li>Powerpoint</li>
              </ul>
            </section>

            <section>
              <h5>Computer Skills</h5>
              <ul>
                <li>Web domain and content management</li>
                <li>Hardware/software repair & troubleshooting</li>
                <li>Typing 70 WPM</li>
              </ul>
            </section>

            <section>
              <h5>Other Skills</h5>
              <ul>
                <li>Digital and film photography</li>
                <li>Making physical mockups and prototypes</li>
                <li>Hand illustration and sketching</li>
                <li>Bookmaking</li>
              </ul>
            </section>
          </section>
      </section>
    </article>

  <?php get_footer(); ?>

</body>

</html>
