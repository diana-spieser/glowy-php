<?php
/*
Template Name: About Page
*/

get_header(); // Include your header template

// Add your custom content for the About page here
?><section id="about-a" class="text-center py-3">
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
<?php
get_footer();
?>