$(document).ready(function () {
	$('#toggleItems').on('click', function(){
		$('#fixedNewsletter').slideToggle();
	});
	$('.mobileNavi').on('click', function(){
		$('.mobileOverlay').toggle();
		// $('.mobileOverlayClose').hide();
	});
});

$('ul.nav li.dropdown'). hover(function() {
$(this). find('.dropdown-menu'). stop(true, true). delay(200). fadeIn(500);
}, function() {
$(this). find('.dropdown-menu'). stop(true, true). delay(200). fadeOut(500);
});
$('.sidebarSlider').carousel({
  interval: 3000
})

$(document).ready(function () {
	var url = window.location;
	// console.log(url);
	// Will only work if string in href matches with location
	//$('ul.nav a[href="' + url + '"]').parent().addClass('active');

	// Will also work for relative and absolute href
	$('ul.nav a').filter(function () {
		return this.href == url;
	}).parent().addClass('active').parent().parent().addClass('active');
});

$(function() {
			
				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ),
						$nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':last' ).on( 'click', function() {

								slitslider.next();
								return false;

							} );

							$navArrows.children( ':first' ).on( 'click', function() {
								
								slitslider.previous();
								return false;

							} );

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes: 
				 * 
				 * example how to add items:
				 */

				/*
				
				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
				
				// call the plugin's add method
				ss.add($items);

				*/
			
			});
