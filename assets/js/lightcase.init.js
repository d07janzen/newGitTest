;(function ($) {
	$(function () {
		$('a[data-rel^=lightcase]').lightcase();
		$('a[data-rel="lightcase:myCollection:slideshow"]').lightcase({showSequenceInfo: false, transition: 'scrollHorizontal'});
		$('a[data-rel="lightcase:myCollection"]').lightcase({showSequenceInfo: false});

		$('#example1').lightcase({transition: 'none'});
		$('#example2').lightcase({transition: 'fade'});
		$('#example3').lightcase({transition: 'elastic'});
		$('#example4').lightcase({transition: 'scrollTop'});
		$('#example5').lightcase({transition: 'scrollLeft'});
		$('#example6').lightcase({transition: 'scrollRight'});
		$('#example7').lightcase({transition: 'scrollBottom'});
		$('a[data-rel="lightcase:scrollHor"]').lightcase({showSequenceInfo: false, transition: 'scrollHorizontal'});


		
		// HTML5 video
		$('#comparanalysis').lightcase({
			video: {
				width: 800,
				height: 450,
				poster: '',
				preload: 'auto',
				controls: true,
				autobuffer: true,
				autoplay: true,
				loop: false
			}
		});

		$('#instantcustom').lightcase({
			video: {
				width: 800,
				height: 450,
				poster: '',
				preload: 'auto',
				controls: true,
				autobuffer: true,
				autoplay: true,
				loop: false
			}
		});
		
		$('#realtimeturn').lightcase({
			video: {
				width: 800,
				height: 800,
				poster: '',
				preload: 'auto',
				controls: true,
				autobuffer: true,
				autoplay: true,
				loop: false
			}
		});

		
		// On the fly
		$('#various9').click(function (event) {
			event.preventDefault();

			lightcase.start({
				href: '#',
				maxWidth: 640,
				maxHeight: 400,
				onFinish: {
					injectContent: function () {
						var content = '<div style="text-align: center;">ace!</div>';

						// Find the innermost element and feed with content.
						// Can be different according to the media type!
						lightcase.get('contentInner').children().html(content);
						// Do a resize now after filling in the content
						lightcase.resize();
					}
				}
			});
		});
		
	});
})(jQuery);