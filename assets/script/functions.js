/* Declare a namespace for the site */
var Site = window.Site || {};

/* Create a closure to maintain scope of the '$'
   and remain compatible with other frameworks.  */
(function($) {

	//same as $(document).ready();
	$(function() {

		$(".account h2 a, .quick-add .add-new a, h1 a, .view .queue .location .title a, .incomplete-sign-title a, .view .grip a, .sort a, .view-details a, .rfp a").click(function(event) {
			event.preventDefault();
		});


		/* Show/Hide Panels */


		$(".details").hide();

		$(".sign").click(function(){
			$(this).toggleClass("active").find(".details").toggle();
		});

		$(".account .options").hide();

		$(".account h2").click(function(){
			$(this).toggleClass("active").next(".account .options").toggle();
		});

		$(".quick-add .options").hide();

		$(".quick-add .add-new").click(function(){
			$(this).toggleClass("active").next(".quick-add .options").toggle();
		});

		$(".municipality .other").hide();

		$("h1").click(function(){
			$(this).toggleClass("active").next(".municipality .other").toggle();
		});

		$(".view .queue .grip").click(function(){
			$(this).parent().toggleClass("active").next(".view .queue").toggle();
		});

		$(".view .notifications .grip").click(function(){
			$(this).parent().toggleClass("active").next(".view .notifications").toggle();
		});

		$(".view .users .grip").click(function(){
			$(this).parent().toggleClass("active").next(".view .users").toggle();
		});

		$(".view .queue .signs").hide();

		$(".view .queue .location .meta").click(function(){
			$(this).toggleClass("active").next(".view .queue .signs").toggle();
		});

		$(".inventory .view .main .signs").hide();

		$(".inventory .view .main .meta").click(function(){
			$(this).toggleClass("active").next(".inventory .view .main .signs").toggle();
			$(this).parent().toggleClass("active").next(".inventory .view .location").toggle();
		});

		$(".quotes .view .main .signs").hide();

		$(".quotes .view .main .meta").click(function(){
			$(this).toggleClass("active").next(".quotes .view .main .signs").toggle();
			$(this).parent().toggleClass("active").next(".quotes .view .location").toggle();
		});

	});


	$(window).bind("load", function() {



	});

})(jQuery);