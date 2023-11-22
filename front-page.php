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
      <a href="#work" class="btn-light">View my work</a>
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
<section id="work" class="galerie bloc-page work">
  <div class="container">
    <h2 class="section-title wow bounce" data-wow-duration="2s">My Work</h2>
    <div class="bottom-line"></div>
    <div class="galerie__photos colonnes wow" data-wow-duration="2s">
      <?php
            $galerie = new WP_Query(array (
                'post_type' => 'photos',
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page' => 8,
                'paged' => 1)
            );
            displayImages($galerie, false);
        ?>
    </div>
</section>
<section id="about-a" class="text-center py-3">
  <div class="container">
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fille.png"
        alt="profile picture of Diana Spieser" class="fille" />
      <h2 class="section-title wow bounce" data-wow-duration="2s">About Me</h2>
      <div class="bottom-line"></div>
    </div>
    <p class=" lead">
      Let me tell you a little about myself and what I do...
    </p>
    <div class="about-info">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg"
        alt="profile picture of Diana Spieser" class="bio-image" />
      <div class="bio bg-light">
        <h4>Your Project Is In Safe Hands</h4>
        <p>
          Hello! I'm thrilled that you've taken the time to explore my work.
          As a dynamic and passionate junior web developer, I am dedicated
          to creating impactful digital experiences. My journey into web
          development began with a deep desire for personal growth and
          fulfillment. Coding represents the perfect equilibrium for me—an
          incredible blend of learning, problem-solving, creativity, and
          customer satisfaction. With a background in management from
          business school and a passion for design, I bring a unique
          perspective to my work. Meticulously managing stock and creating
          visually appealing merchandising displays in Havaianas stores have
          taught me the importance of attention to detail. Studying trends
          and implementing them is integral to my approach, enhancing the
          customer journey. I effectively analyze data to make strategic
          decisions.
        </p>

        <p>
          But my journey doesn't stop there. I've completed Le Wagon coding
          bootcamp in 2022 and I'm currently enrolled in Telerik Academy,
          expanding my skills in and React. Additionally, I am
          immersing myself in the world of WordPress, with Open Classrooms
          mastering the intricacies of this powerful content management
          system.
        </p>
        <p>
          What truly sets me apart is my multicultural background
          and fluency in English, French, German, and Bulgarian, I
          understand the importance of creating digital experiences that
          resonate with diverse audiences and drive meaningful connections.
        </p>
      </div>
      <div class="award-1">
        <i class="fas fa-graduation-cap fa-3x"></i>
        <h3>LE WAGON NICE BATCH #1056</h3>
      </div>

      <div class="award-2">
        <i class="fas fa-graduation-cap fa-3x"></i>
        <h3>EDHEC BUSINESS SCHOOL NICE</h3>
      </div>

      <div class="award-3">
        <i class="fas fa-graduation-cap fa-3x"></i>
        <h3>Telerik Academy Alpha JavaScript</h3>
      </div>
    </div>
  </div>
</section>


<!-- Section B: Progress Bars -->
<section id="about-b" class="bg-dark py-3">
  <div class="container">
    <h2 class="section-title">Technical Skills</h2>
    <div class="bottom-line"></div>
    <h4>HTML:</h4>
    <div class="progress">
      <div style="width: 100%"></div>
    </div>
    <h4>CSS:</h4>
    <div class="progress">
      <div style="width: 90%"></div>
    </div>
    <h4>Javascript:</h4>
    <div class="progress">
      <div style="width: 60%"></div>
    </div>
    <h4>React:</h4>
    <div class="progress">
      <div style="width: 60%"></div>
    </div>

    <h4>RUBY:</h4>
    <div class="progress">
      <div style="width: 70%"></div>
    </div>
    <h4>RAILS:</h4>
    <div class="progress">
      <div style="width: 70%"></div>
    </div>
    <h4>SQL:</h4>
    <div class="progress">
      <div style="width: 40%"></div>
    </div>
    <h4>PHP:</h4>
    <div class="progress">
      <div style="width: 15%"></div>
    </div>
  </div>
  <div class="text-center my-2">
    <a href="http://localhost/projet-portfolio/wp-content/uploads/2023/11/cv_diana_spieser_en-2.pdf" class="btn-light"
      download>Download CV</a>

  </div>
</section>

<script>
// Function to handle alternating slide animation with delays
function alternateSlideAnimation() {
  var photos = jQuery('.galerie__photos.colonnes img');
  photos.each(function(index) {
    var animationClass = index % 2 === 0 ? 'slideInLeft' : 'slideInRight';
    jQuery(this).addClass('wow ' + animationClass).attr('data-wow-duration', '1s')
  });
}
// Call the function when the document is ready
jQuery(document).ready(function($) {
  alternateSlideAnimation();
});
</script>

<?php get_footer() ?>