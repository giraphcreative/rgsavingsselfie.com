

// on load
$(document).ready(function(){

	var next_slide = function() {
		var current = $('.slide:visible');
		var nxt = current.next('.slide:hidden');
		if ( typeof( nxt.html() ) == 'undefined' ) {
			var nxt = $('.slide:first');
		}
		current.hide();
		nxt.show();
	}

	var prev_slide = function() {
		var current = $('.slide:visible');
		var previous = current.prev('.slide:hidden');
		if ( typeof( previous.html() ) == 'undefined' ) {
			var previous = $('.slide:last');
		}
		current.hide();
		previous.show();
	}

	var slideInterval = setInterval( next_slide, 30000 );

	$('.slide-control').on( 'click', function(){

		// stop the auto-rotation
		clearInterval( slideInterval );
		
		// if it's the next control, go next, if prev, go prev
		if ( $(this).hasClass( 'next' ) ) {
			next_slide();
		} else {
			prev_slide();
		}

	});

});

