<?php get_header() ?>

<section class="hero" id="home">

  <h1>
    <span class="txt-type" data-wait="3000" data-words='["Portfolio Diana Spieser"]'></span>
  </h1>



  <?php
        $random_image = new WP_Query(array (
            'post_type' => 'photos',
            'tax_query' => array(
                array(
                    'taxonomy' => 'format',
                    'field' => 'slug',
                    'terms' => 'landing',
                ),
            ),
            'orderby' => 'rand',
            'posts_per_page' => '1'));
        if ($random_image->have_posts()) {
            while ($random_image->have_posts()) {
                $random_image->the_post();
                echo '<img class="hero__background thumbnail" src="';
                echo the_post_thumbnail_url();
                echo '" />';
            }
        }
        wp_reset_postdata();
    ?>

</section>
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
        <i class="fas fa-computer fa-2x"></i>
        <h3>Coding Enthusiast</h3>
        <p>
          Crafting captivating online experiences.
        </p>
      </div>
      <div class='wow bounceInUp'>
        <i class="fas fa-bullseye fa-2x"></i>
        <h3>Versatile Skills</h3>
        <p>
          Expertise in Rails, React, and WordPress.
        </p>
      </div>
      <div class='wow bounceInUp'>
        <i class="fas fa-object-ungroup fa-2x"></i>
        <h3>Collaborative Team Player:</h3>
        <p>
          Actively contributing and embracing opportunities.
        </p>
      </div>
      <div class='wow fadeInRight'>
        <i class="fas fa-check fa-2x"></i>
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
        <li><i class="fas fa-train fa-3x"></i></li>
        <li class="stats-title wow zoomIn">Le Wagon Coding Bootcamp</li>
        <li class="stats-number">2022</li>
      </ul>
    </div>
    <div>
      <ul>
        <li><i class="fas fa-brands fa-js fa-3x"></i></li>
        <li class="stats-title wow zoomIn">Telerik Alpha JS Academy</li>
        <li class="stats-number">2023</li>
      </ul>
    </div>
    <div>
      <ul>
        <li><i class="fas fa-code fa-3x"></i></li>
        <li class="stats-title wow zoomIn">Hackathons</li>
        <li class="stats-number">2</li>
      </ul>
    </div>
    <div>
      <ul>
        <li><i class="fas fa-globe fa-3x"></i></li>
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

<section class="galerie bloc-page work">
  <div class="container">
    <h2 class="section-title wow bounce" data-wow-duration="2s">My Work</h2>
    <div class="bottom-line"></div>
    <div class="filtres colonnes">

      <div class="filtres__taxonomie colonnes colonne">
        <form id="categories_photo" class="js-filter-form filtres__taxonomie_categories filtre colonne">
          <label for="select-categorie">Main technology</label>
          <select id="select-categorie" name="categories_photos">
            <option value="all" hidden></option>
            <option value="all">All Categories</option>
            <?php displayTaxonomies('categories_photo'); ?>
          </select>
        </form>
        <form id="format" class="js-filter-form filtres_taxonomie__formats filtre colonne">
          <label for="select-format">Type Website</label>
          <select id="select-format" name="format">
            <option value="all" hidden></option>
            <option value="all">All formats</option>
            <?php displayTaxonomies('format'); ?>
          </select>
        </form>
      </div>

      <div class="filtres__tri colonnes colonne">
        <div class="colonne">
        </div>
        <form id="ordre" class="js-filter-form filtres_taxonomie__formats filtre colonne">
          <label for="select-ordre">Sort by</label>
          <select id="select-ordre" name="ordre">
            <option class="js-ordre-item" value="DESC">Newest</option>
            <option class="js-ordre-item" value="ASC">Oldest</option>
          </select>
        </form>
      </div>

    </div>

    <div class="galerie__photos colonnes">
      <?php
            $galerie = new WP_Query(array (
                'post_type' => 'photos',
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page' => 4,
                'paged' => 1)
            );
            displayImages($galerie, false);
        ?>
    </div>

    <div class="galerie__btn" id="galerie__btn">
      <input type=" button" style="text-align: center;" value="Load More">
      <img id="btn-load-more" src="<?php echo get_template_directory_uri(); ?>/assets/images/camera_icon.png"
        alt="Icône d'appareil photo" />
    </div>

</section>


<?php get_footer() ?>