(function ($) {
  'use strict';

  $('.wpcf7-submit').addClass('bouton');

  var dureeTransitionPopup = 500;
  var modale = document.getElementById('modale-container');
  var btnFermetureModale = document.getElementById('close-modale');

  $('.btn-modale').click(function () {
    transitionPopup($('.modale'), 1);
  });

  btnFermetureModale.onclick = function () {
    transitionPopup($('.modale'), 0);
  };

  window.onclick = function (event) {
    if (event.target == modale) {
      transitionPopup($('.modale'), 0);
    }
  };

  function transitionPopup(element, opacity) {
    if (opacity == 1) {
      $(element).css('display', 'flex');
    } else if (opacity == 0) {
      setTimeout(function () {
        $(element).css('display', 'none');
      }, dureeTransitionPopup);
    }
    $(element).animate(
      {
        opacity: opacity,
      },
      dureeTransitionPopup
    );
  }

  let menuMobileOrigine = $('.header-mobile').height() * -1;
  let menuOuvert = false;
  $('.header-mobile').css('margin-top', menuMobileOrigine);

  $('.header__btn-menu').click(function () {
    if (!menuOuvert) {
      $('.header-mobile').css('opacity', '1');
      effetMenu(0, 0);
    } else {
      effetMenu(1, menuMobileOrigine);
      setTimeout(function () {
        $('.header-mobile').css('opacity', '0');
      }, dureeTransitionPopup);
    }
    menuOuvert = !menuOuvert;
  });

  function effetMenu(opacite, position) {
    setTimeout(function () {
      $('.header-desktop').css('opacity', opacite);
    }, dureeTransitionPopup / 2);
    $('.header-mobile').animate(
      {
        'margin-top': position,
      },
      dureeTransitionPopup
    );
  }

  $('.interaction-photo__btn').click(function () {
    // Handle the click event for .interaction-photo__btn
  });

  navigationPhotos($('.arrow-gauche'), $('.previous-image'));
  navigationPhotos($('.arrow-droite'), $('.next-image'));

  function navigationPhotos(arrow, image) {
    arrow.hover(
      function () {
        image.css('opacity', '1');
      },
      function () {
        image.css('opacity', '0');
      }
    );
  }

  $('.btn_nav').click(function () {
    // Animate content
    $('.page__style').addClass('animate_content');
    $('.page__description').fadeOut(100).delay(2800).fadeIn();

    setTimeout(function () {
      $('.page__style').removeClass('animate_content');
    }, 3200);
  });

  // On click, show the corresponding section after 1500ms
  $('.home_link').click(function () {
    setTimeout(function () {
      $('.home').addClass('fadeIn');
    }, 1500);
  });

  $('.about_link').click(function () {
    setTimeout(function () {
      $('.about').addClass('fadeIn');
    }, 1500);
  });

  $('.work_link').click(function () {
    setTimeout(function () {
      $('#work').addClass('fadeIn');
    }, 1500);
  });
})(jQuery);
