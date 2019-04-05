jQuery(document).ready(function() {
  jQuery(".input-field").click(function() {
    jQuery(this).children('label').addClass("float");
    jQuery(this).children('input')
      .focus();
  });

  jQuery("input").blur(function() {
      if (!jQuery(this).val()) {
        jQuery(this).prev().removeClass("float");
      }
  });
});
