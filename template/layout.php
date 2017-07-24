<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo $page_title; ?>
	</title>
	<meta charset="utf-8">
	<meta name="description" content="<?php echo $page_desc; ?>">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?php echo $path; ?>/template/css/normalize.css">
	<link rel="stylesheet" href="<?php echo $path; ?>/template/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo $path; ?>/template/css/animate.css">
	<link rel="stylesheet" href="<?php echo $path; ?>/template/css/jquery.bxslider.css">
	<link rel="stylesheet" href="<?php echo $path; ?>/template/css/lightbox.css">
	<link rel="stylesheet" href="<?php echo $path; ?>/template/css/style.css">
</head>
<body>
	<div class="section">
		<div class="main wrapper clearfix">
			<!-- Main Content -->
			<?php echo $parsedown->text($content); ?>
		</div>
	</div>
	<!-- Start Scripts -->
	<script src="<?php echo $path; ?>/template/js/bootstrap.min.js"></script>
	<script src="<?php echo $path; ?>/template/js/script.js"></script>
	<script src="<?php echo $path; ?>/template/js/jquery.js"></script>
	<script src="<?php echo $path; ?>/template/js/instafeed.js"></script>
	<script src="<?php echo $path; ?>/template/js/jquery.bxslider.js"></script>
	<script src="<?php echo $path; ?>/template/js/TweenMax.min.js"></script>
	<script src="<?php echo $path; ?>/template/js/jquery-parallax.js"></script>
	<script src="<?php echo $path; ?>/template/js/jquery.textillate.js"></script>
	<script src="<?php echo $path; ?>/template/js/jquery.lettering.js"></script>
	<script src="<?php echo $path; ?>/template/js/rellax.js"></script>
	<script src="<?php echo $path; ?>/template/js/lightbox.js"></script>
	<script src="//www.powr.io/powr.js" external-type="pulsecms"></script>
	<script type="text/javascript">
		// $fn.parallax( resistance, mouse )
		$( document ).mousemove( function ( e ) {
			$( '#black' ).parallax( 100, e );
			$( '#bird' ).parallax( -100, e );
		} );
	</script>
	<script type="text/javascript">
		$( function () {
			$( '.tlt' ).textillate( {
				loop: true,
				delay: 5000
			} )
		} )
	</script>
	<script type="text/javascript">
		var userFeed = new Instafeed( {
			get: 'user',
			userId: '1696926097',
			clientId: 'fa9b975dce634b8bba2ee28fc0169ec9',
			accessToken: '1696926097.1677ed0.babbe13de0b640c29d3eb760dc758c12',
			resolution: 'standard_resolution',
			sortBy: 'most-recent',
			limit: 64,
			links: false,
			template: '<div class="slide"><img src="{{image}}" /></div>',
			after: function ( image ) {
				$( '#instafeed' ).bxSlider( {
					slideWidth: 480,
					minSlides: 6,
					maxSlides: 6,
					slideMargin: 0,
					pager: false,
					auto: true,
					moveSlides: 1
				} );
			}
		} );
		userFeed.run();
	</script>
	<script type="text/javascript">
		$( document ).ready( function () {
			$( '.gallery' ).bxSlider( {
				slideWidth: 480,
				minSlides: 6,
				maxSlides: 6,
				slideMargin: 0,
				pager: false,
				auto: true,
				moveSlides: 1
			} );
		} );
	</script>
	<script type="text/javascript">
		$( document ).ready( function () {
			$( '#mce-EMAIL' ).data( 'holder', $( '#mce-EMAIL' ).attr( 'placeholder' ) );
			$( '#mce-EMAIL' ).focusin( function () {
				$( this ).attr( 'placeholder', '' );
			} );
			$( '#mce-EMAIL' ).focusout( function () {
				$( this ).attr( 'placeholder', $( this ).data( 'holder' ) );
			} );
		} );
	</script>
	<script>
  // Also can pass in optional settings block
  var rellax = new Rellax('.rellax');
</script>
	<!-- Stats Tracking Code -->
	<script src="<?php echo $path; ?>/<?php echo $admin; ?>/inc/tracker.php?uri=<?php echo $_SERVER['REQUEST_URI']; ?>&ref=<?php echo $_SERVER['HTTP_REFERER']; ?>"></script>
</body>
</html>