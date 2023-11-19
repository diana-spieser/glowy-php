<?php
/*
Template Name: My Work Template
*/
get_header();
?>
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

<?php get_footer(); ?>