<?php get_header() ?>
<header id="header-home"
  style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/showcase.png') no-repeat center right/cover;">
  <div class="container">
    <div class="header-content">

      <h1>
        I am
        <span class="txt-type" data-wait="3000" data-words='["Diana Spieser"]'></span>
      </h1>
      <p class="lead">Junior Full stack web developer</p>
      <a href="https://diana-spieser.tech/index.php/work/" class="btn-light">View my work</a>
    </div>
  </div>
</header>
<section id="home-a" class="text-center py-2">

  <div class=" container">
    <h2 class="section-title">
      Welcome to My Portfolio
    </h2>
    <div class="bottom-line"></div>
    <p class="lead">
      I'm a Junior Web Developer on a mission to transform creative ideas into digital reality.
    </p>
    <p class="lead"></p>
    <div class="specials">
      <div class='wow fadeInRight'>
        <i class="fas fa-computer fa-5x"></i>
        <h3>Coding Enthusiast</h3>
        <p>
          Crafting captivating online experiences.
        </p>
      </div>
      <div class='wow bounceInUp'>
        <i class="fas fa-bullseye fa-5x"></i>
        <h3>Versatile Skills</h3>
        <p>
          Expertise in Rails, React, and WordPress.
        </p>
      </div>
      <div class='wow bounceInUp'>
        <i class="fas fa-object-ungroup fa-5x"></i>
        <h3>Collaborative Team Player:</h3>
        <p>
          Actively contributing and embracing opportunities.
        </p>
      </div>
      <div class='wow fadeInRight'>
        <i class="fas fa-check fa-5x"></i>
        <h3>Quality First</h3>
        <p>
          Prioritizing clean code and efficient workflows.
        </p>
      </div>
    </div>
  </div>
</section>


<!-- Section B: Stats -->
<section id="home-b" class="text-center py-2">
  <h2 class="section-title">My achievements</h2>
  <div class="bottom-line"></div>
  <div class="stats">
    <div>
      <ul>
        <li>
          <img class="thumbnail" src=" <?php echo get_template_directory_uri(); ?>/assets/images/22-min.png"
            alt="Prévisualisation image précédente">
        </li>
        <li class="stats-title wow zoomIn">Le Wagon Coding Bootcamp</li>
        <li class="stats-number">2022</li>
      </ul>
    </div>
    <div>
      <ul>
        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/22-min.png"
            alt="Prévisualisation image précédente"></li>
        <li class="stats-title wow zoomIn">Telerik Alpha JS Academy</li>
        <li class="stats-number">2023</li>
      </ul>
    </div>
    <div>
      <ul>
        <li><img class="thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/images/22-min.png"
            alt="Prévisualisation image précédente"></li>
        <li class="stats-title wow zoomIn">Hackathons</li>
        <li class="stats-number">2</li>
      </ul>
    </div>
    <div>
      <ul>
        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/22-min.png"
            alt="Prévisualisation image précédente"></li>
        <li class="stats-title wow zoomIn">40 projects</li>
        <li class="stats-number">8 Websites Online</li>
      </ul>
    </div>
  </div>
</section>

<!-- Section C: Process -->
<section id="home-c" class="text-center py-2">
  <div class="container">
    <h2 class="section-title">My Creative Process</h2>
    <div class="bottom-line"></div>
    <p class="lead">
      My projects follow a structured process from concept to deployment.
    </p>
    <div class="process">
      <div>
        <i class="fas fa-file-alt fa-4x process-icon my-2">
          <div class="process-step">1</div>
        </i>
        <h3>Concepting</h3>
        <p>
          I lay a solid foundation through personas, user journeys, wireframes, and user flows.
        </p>
      </div>
      <div>
        <i class="fas fa-desktop fa-4x process-icon my-2">
          <div class="process-step">2</div>
        </i>
        <h3>Backend</h3>
        <p>
          Proficient in Ruby on Rails and Node.js, I create efficient web applications.
        </p>
      </div>
      <div>
        <i class="fas fa-object-ungroup fa-4x process-icon my-2">
          <div class="process-step">3</div>
        </i>
        <h3>Frontend Design</h3>
        <p>
          Strong in HTML, CSS, Bootstrap, JavaScript, and React, I focus on responsive design.
        </p>
      </div>
      <div>
        <i class="fas fa-thumbs-up fa-4x process-icon my-2">
          <div class="process-step">4</div>
        </i>
        <h3>Deployment</h3>
        <p>
          Deploy on platforms like Heroku and Netlify, analyze user behavior with tools like Hotjar.
        </p>
      </div>
    </div>
  </div>
</section>

<?php get_footer() ?>