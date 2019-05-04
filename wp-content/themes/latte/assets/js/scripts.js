
jQuery(window).load(function() {

	if( latte_script_var.latte_preloader_display != 1 ) {
		/* Preloader */
		jQuery(".status").fadeOut();
		jQuery(".preloader").delay(1000).fadeOut("slow");
	}


});

// lazy load images
let images = [...document.querySelectorAll('.lazy-image')]

const interactSettings = {
	root: document.querySelector('.center'),
	rootMargin: '0px 0px 200px 0px'
}

function onIntersection(imageEntites) {
	imageEntites.forEach(image => {
		if (image.isIntersecting) {
			observer.unobserve(image.target)
			image.target.src = image.target.dataset.src
			image.target.onload = () => image.target.classList.add('loaded')
		}
	})
}

let observer = new IntersectionObserver(onIntersection, interactSettings)

images.forEach(image => observer.observe(image))





jQuery(document).ready(function($) {

	// skills progress bar


var skillsDiv = $('#skillsbar');

$(window).on('scroll', function(){
	var winT = $(window).scrollTop(),
	winH = $(window).height(),
	skillsT = skillsDiv.offset().top;
	if(winT + winH  > skillsT){
	
		$('.skillbar').each(function(){
			$(this).find('.skillbar-bar').animate({
				width:$(this).attr('data-percent')
			},3000);
		});

	}
});


// AOS animation
AOS.init({
  disable: function() {
    var maxWidth = 800;
    return window.innerWidth < maxWidth;
  }
});




$(".avatar a").on('click', function(event) {
event.preventDefault();
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash == "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
      	scrollTop: $(hash).offset().top
      }, 300, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
    });
    } // End if
});

	

	if( latte_script_var.latte_menu_display != 1 ) {
		
		var menuLeft = document.getElementById( 'pmenu' ),
		showLeftPush = document.getElementById( 'showLeftPush' ),
		hideLeftPush = document.getElementById( 'hideLeftPush' ),
		body = document.body;

		showLeftPush.onclick = function() {

			classie.toggle( this, 'active' );
			classie.toggle( body, 'pmenu-push-toright' );
			if (classie.has(showLeftPush,"fa-bars")) {
				classie.remove(showLeftPush,"fa-bars");
				classie.add(showLeftPush,"fa-times");
			} else {
				classie.add(showLeftPush,"fa-bars");
			}
			classie.toggle( menuLeft, 'pmenu-open' );
			disableOther( 'showLeftPush' );
		};
		hideLeftPush.onclick = function() {
			classie.toggle( this, 'active' );
			classie.toggle( body, 'pmenu-push-toright' );
			classie.toggle( menuLeft, 'pmenu-open' );
			disableOther( 'hideLeftPush' );
			classie.add(showLeftPush,"fa-bars");
		};

		function disableOther( button ) {
			if( button !== 'showLeftPush' ) {
				classie.toggle( showLeftPush, 'disabled' );
			}
		}
	}

	if( latte_script_var.latte_is_homepage != 1 ) {
		if( latte_script_var.latte_skills_display != 1 ) {
			/* Skillbar animation speed */
			jQuery('.skillbar').each(function(){
				jQuery(this).find('.skillbar-bar').animate({
					width:jQuery(this).attr('data-percent')
				},6000);
			});
		}
		/* Apply matchHeight to match services grid */
		var byRow = $('body').hasClass('pmenu-push');
		if( latte_script_var.latte_services_display != 1 ) {
			$('.col-md-12').each(function() {
				$(this).children('.service-box').matchHeight(byRow);
			});
		}
		if( latte_script_var.latte_blogposts_display != 1 ) {
			$('.col-md-12').each(function() {
				$(this).children('.blog-item').matchHeight(byRow);
			});
		}
	}


		if( latte_script_var.latte_menu_display != 1 ) {
		var menuLeft = document.getElementById( 'pmenu' ),
		showLeftPush = document.getElementById( 'showLeftPush' ),
		hideLeftPush = document.getElementById( 'hideLeftPush' ),
		body = document.body;

		showLeftPush.onclick = function() {
			classie.toggle( this, 'active' );
			classie.toggle( body, 'pmenu-push-toright' );
			if (classie.has(showLeftPush,"fa-bars")) {
				classie.remove(showLeftPush,"fa-bars");
				classie.add(showLeftPush,"fa-times");
			} else {
				classie.add(showLeftPush,"fa-bars");
			}
			classie.toggle( menuLeft, 'pmenu-open' );
			disableOther( 'showLeftPush' );
		};
		hideLeftPush.onclick = function() {
			classie.toggle( this, 'active' );
			classie.toggle( body, 'pmenu-push-toright' );
			classie.toggle( menuLeft, 'pmenu-open' );
			disableOther( 'hideLeftPush' );
			classie.add(showLeftPush,"fa-bars");
		};

		function disableOther( button ) {
			if( button !== 'showLeftPush' ) {
				classie.toggle( showLeftPush, 'disabled' );
			}
		}
	}

});
