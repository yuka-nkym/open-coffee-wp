jQuery(function () {
  jQuery("#js-toggle").on("click", function (e) {
    e.preventDefault();
    jQuery("#js-drawer").toggleClass("add-active");
  });

  jQuery(".js-drawer-link, #js-overlay").on("click", function (e) {
    jQuery("#js-drawer").removeClass("add-active");
  });

  jQuery(".js-pagetop").hide();
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 300) {
      jQuery(".js-pagetop").fadeIn(400);
    } else {
      jQuery(".js-pagetop").fadeOut(400);
    }
  });
});
