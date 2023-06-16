jQuery(document).ready(function($) {
    
  var allPanels = jQuery('.faqs > dd').hide();
    
  jQuery('.faqs > dt > a').click(function() {
    allPanels.slideUp();
    jQuery(this).parent().next().slideDown();
    return false;
  });

});