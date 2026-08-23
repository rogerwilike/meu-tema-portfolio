<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Encoding and Rendering -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Basic SEO -->
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('portfolio_rogerwilike'); ?>">
  <meta name="robots" content="index, follow">

  <!-- Open Graph / Social Media -->
  <meta property="og:title" content="<?php bloginfo('name'); ?>">
  <meta property="og:description" content="<?php bloginfo('portfolio_rogerwilike'); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
  <meta property="og:image" content="<?php echo esc_url(get_template_directory_uri() . '/assets/img/og-cover.jpg'); ?>">

  <!-- Favicon -->
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/favicon.ico'); ?>" sizes="any">
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/icon.svg'); ?>" type="image/svg+xml">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- Header / Navigation -->
  <header class="header">
    <div class="container nav-container">
      <nav aria-label="Primary navigation">
        <ul class="nav-list">
          <li><a href="#section1">Home</a></li>
          <li><a href="#section2">About</a></li>
          <li><a href="#section3">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Unique Main Content -->
  <main id="main-content">
    
    <!-- Hero / Introduction -->
    <section class="hero section">
      <div class="container">
        <h1><?php bloginfo('name'); ?></h1> <br>
        <p><?php bloginfo('description'); ?></p>
        <div class="certificate-box">
            <article class="certificate-card">
                <h3>Responsive Web Design</h3>
                <a href="https://www.freecodecamp.org/certification/wilike/responsive-web-design-v9" target="_blank">
                <img src="http://portfolio-dev.local/wp-content/uploads/2026/08/responsive.png" alt="responsive web design certificate" style="width: 420px;height: 256px;">
                </a>
              </article>
            <article class="certificate-card">
                <h3>B1 English for Developers</h3>
                <a href="https://www.freecodecamp.org/certification/wilike/b1-english-for-developers" target="_blank">
                <img src="http://portfolio-dev.local/wp-content/uploads/2026/08/english.png" alt="b1 english for developers certificate" style="width: 420px;height: 256px;">
                </a>
              </article>
        </div>
      </div>
    </section>

    <!-- Generic Content Section -->

        <section id="section1" class="section1">
      <div class="container">
        <h2>About Me</h2>
        <p>Hello, my name is Roger Wilike and I am a student of Information Systems, transitioning into the field of web development with a passion of contributing to meaningful projects while continuously learning.</p>
      </div>
    </section>

    <section id="section2" class="section2">
      <div class="container">
        <h2>Projects</h2>
        <p>Here are some of the projects I can offer:</p>
      </div>
    </section>

    <section id="section3" class="section3">
      <div class="container">
      <h2>Contact Me</h2> 
                <a href="https://www.linkedin.com/in/roger-wilike-069a9513b/" target="_blank">
                <img src="http://portfolio-dev.local/wp-content/uploads/2026/08/icons8-linkedin-48.png" alt="LinkedIn profile" style="width: 48px;height: 48px;">
                </a>
                <a href="https://github.com/rogerwilike" target="_blank">
                <img src="http://portfolio-dev.local/wp-content/uploads/2026/08/icons8-github-logo-50.png" alt="GitHub profile" style="width: 48px;height: 48px;">
                </a>
                <a href="mailto:rogerwilik@gmail.com" target="_blank">
                  <img src="http://portfolio-dev.local/wp-content/uploads/2026/08/icons8-gmail-logo-48.png" alt="Send Email" style="width: 48px;height: 48px;">
                </a>
      </div>
    </section>

  </main>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved, Roger Wilike.</p>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>