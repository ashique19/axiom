jQuery(document).ready(function () { 
	jQuery('.faqs dd').hide();
		jQuery('.faqs > dt').hover(function(){jQuery(this).addClass('hover')},function(){jQuery(this).removeClass('hover')}).click(function(){
		jQuery(this).next().slideToggle('normal');
		});	
	
});