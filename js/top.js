jQuery(function () {
  jQuery(function () {
    if (window.matchMedia("(min-width: 1100px)").matches) {
      jQuery("#js-toggle").hide();
      jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 700) {
          jQuery("#js-toggle").fadeIn(400);
        } else {
          jQuery("#js-toggle").fadeOut(400);
        }
      });
    } else {
      jQuery("#js-toggle").show();
    }
  });

  //swiper
  let swipeOption = {
    loop: true,
    effect: "fade",
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 2000,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  };
  new Swiper(".swiper", swipeOption);
});
