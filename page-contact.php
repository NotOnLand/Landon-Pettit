<?php get_header(); ?>
</head>

<body>
  <div id="page" class="container">

    <?php get_template_part('nav') ?>

    <article class="contact float-left col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
      <?php echo FrmFormsController::show_form(1, $key = '', $title=true, $description=true); ?>
      <!-- <form action="https://formspree.io/landonpettit@aol.com" method="POST" class="form-group" id="contact">
        <h3>Contact Me</h3>
        <p class="form-text">Send me an <a class="font-weight-bold" href="mailto:landonpettit@aol.com">email</a> or leave a message here</p>

        <div class="float-left col-12 col-md-6 offset-lg-3">
        <label for="name">Name</label>
        <input type="text" id="name" name="Name" placeholder="Name" class="form-control" required>
        </div>

        <div class="float-left col-12 col-md-6 offset-lg-3">
        <label for="email">Your email address</label>
        <input type="email" id="email" name="Email" placeholder="Email" class="form-control" required>
        </div>

        <div class="float-left col-12 col-lg-6 offset-lg-3">
        <label for="message">Your message</label><br>
        <textarea id="message" name="Message" placeholder="Your message" class="form-control" required></textarea>
        </div>

        <div class="row justify-content-center float-left col-12 col-lg-6 offset-lg-3">
          <button type="submit" class="btn btn-success col-3">Submit</button>
          <button type="reset" class="btn btn-danger col-3 offset-2">Reset</button>
        </div>

      </form> -->
    </article>

  <?php get_footer(); ?>

</body>

</html>
