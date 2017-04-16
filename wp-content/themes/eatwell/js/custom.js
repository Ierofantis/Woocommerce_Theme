

	/* GLOBAL */
	
		$(function() {
		  $('a.scroll[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
				$('html,body').animate({
				  scrollTop: target.offset().top
				}, 1000);
				return false;
			  }
			}
		  });
		});
		
		$(function(){
		   $('[rel="tooltip"]').tooltip();
		});
			
	
	
jQuery("input[type='text']").on("keyup", function () {
    if (jQuery(this).val() != "" ) {
        if (jQuery("#billing_first_name").val() != '')
        {
            jQuery("#subnewtide").removeAttr("disabled");
        }
    } else {
        jQuery("#subnewtide").attr("disabled", "disabled");
    }
});


	
jQuery("input[type='text']").on("keyup", function () {
    if (jQuery(this).val() != "" ) {
        if (jQuery("#billing_last_name").val() != '')
        {
            jQuery("#subnewtide").removeAttr("disabled");
        }
    } else {
        jQuery("#subnewtide").attr("disabled", "disabled");
    }
});

	