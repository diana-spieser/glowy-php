jQuery(document).ready(function ($) {
  var images = document.querySelectorAll('.thumbnail');
  new simpleParallax(images, {
    delay: 0.6,
    transition: 'cubic-bezier(0,0,0,1)',
  });
});
