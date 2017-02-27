(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		var $mobileHeader = $('.mobile-header'),
			$mobileMenu = $mobileHeader.find('.hidden-contents'),
			$hamburger = $mobileHeader.find('.glyphicon-menu-hamburger'),
			$mobileSubmenus = $mobileHeader.find('.menu-item-has-children');

		// The hamburger menu toggles an active class on its parent.
		$hamburger.on('click', function() {
			$mobileHeader.toggleClass('active');
			toggleMobileMenu();
		});

		// When we click on a mobile menu item that has a submenu, open the submenu.
		$mobileSubmenus.on('click', function(e) {
			$(this).toggleClass('active');
		});

		// Certain tab areas become accordions at mobile.
		// We using the bootstrap-tabcollapse plugin for this.
		$('.mobile-accordion').tabCollapse();

		// Toggle a tab/accordion if the url hash matches the tab's title.
		var tabToActivate = window.location.hash.slice(1).replace(/-/g, ' ');
		console.log(tabToActivate);
		$('.nav-tabs a').each(function() {
			var title = $(this).text().toLowerCase();
			if (title == tabToActivate) {
				$(this).tab('show');
			}
		});
		$('.panel-group .panel-title a').each(function() {
			var title = $(this).text().toLowerCase();
			if( title == tabToActivate ) {
				$(this).collapse('show');
			}
		})

		function toggleMobileMenu() {

			var tl = new TimelineLite();

			// If we have an 'active' class, bring the menu in.
			if ( $mobileHeader.hasClass('active') ) {
				tl.set( $mobileMenu, { y: '-100%', display: 'block' } );
				tl.to( $mobileMenu, 0.66, { y: '0%', ease: Power2.easeOut } );
			}

			// Otherwise, send it back out. We only do this if it's been brought in, so we know it's visible and offscreen.
			else {
				tl.to( $mobileMenu, 0.66, { y: '-100%', ease: Power2.easeIn } );
			}
		}
		
	});
	
})(jQuery, this);
