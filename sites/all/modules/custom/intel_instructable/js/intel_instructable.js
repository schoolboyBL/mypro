/*jQuery(document).ready(function(){
	jQuery("div.gridColumn").click(function(){
		jQuery(this).toggleClass("showZoomedInfo");
		jQuery("div.gridColumn").not(jQuery(this)).removeClass("showZoomedInfo");
	});
});*/
(function ($) {
  Drupal.behaviors.intel_instructable = {
    attach: function (context, settings) {
      $('.mosiacGrid div.gridColumn', context).click(function (event) {
        $(this).toggleClass("showZoomedInfo");
        $(".mosiacGrid div.gridColumn").not($(this)).removeClass("showZoomedInfo");
      });
    }
  };


})(jQuery);


