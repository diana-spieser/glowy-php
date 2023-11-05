</main>

<?php
    get_template_part('modale');
    get_template_part('lightbox');
?>

<footer id="main-footer">
  <div class="footer-content container">
    <?php
        if (has_nav_menu('primary_menu')) {
            wp_nav_menu(array('theme_location' => 'footer_menu',));
        } ?>
    <p>&copy; 2023. All rights reserved</p>

    <div class="social">
      <a class="social-link" href="https://twitter.com/Dianas57655855S" aria-label="Twitter">
        <i class="fab fa-twitter" aria-hidden="true"></i>
      </a>
      <a class="social-link" href="https://medium.com/@dianaspieser" aria-label="Medium">
        <i class="fab fa-medium" aria-hidden="true"></i>
      </a>
      <a class="social-link" href="https://github.com/diana-spieser" aria-label="GitHub">
        <i class="fab fa-github" aria-hidden="true"></i>
      </a>
      <a class="social-link" href="https://www.linkedin.com/in/diana-spieser/" aria-label="LinkedIn">
        <i class="fab fa-linkedin" aria-hidden="true"></i>
      </a>
    </div>
  </div>
  <?php wp_footer() ?>
</footer>

</body>

</html>