<?php
/*
Template Name: My Work Template
*/
get_header();
?>

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
      <input type="button" style="text-align: center;" value="Load More">
      <img id="btn-load-more" src="<?php echo get_template_directory_uri(); ?>/assets/images/camera_icon.png"
        alt="Icône d'appareil photo" />
    </div>

</section>


<?php get_footer() ?>