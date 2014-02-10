<!-- BEGIN FONTS + STYLESHEETS + JS INCLUDES -->
<link rel='stylesheet' id='fonts' href='http://fonts.googleapis.com/css?family=Droid+Sans|Righteous|Bree+Serif|Lato:400,300|Patua+One|Montserrat:400,700' type='text/css' media='all' />
<link rel='stylesheet' id='style-css' href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='elements-css' href='css/elements.css' type='text/css' media='all' />

<script src="js/jquery-1.7.1.min.js"></script>
<link rel="stylesheet" href="css/idangerous.swiper.css">
<link rel="stylesheet" href="css/swiper-style.css">
<script  src="js/idangerous.swiper-1.9.1.min.js"></script>
<script  src="js/swiper-demos.js"></script>

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/general-header.js'></script>
<script type='text/javascript' src='js/elements.js'></script>

<link href="photoswipe/styles.css" type="text/css" rel="stylesheet">
<link href="photoswipe/photoswipe.css" type="text/css" rel="stylesheet">

<script type="text/javascript" src="photoswipe/lib/klass.min.js"></script>
<script type="text/javascript" src="photoswipe/code.photoswipe-3.0.5.min.js"></script>
<!-- END FONTS + STYLESHEETS + JS INCLUDES -->

<!-- BEGIN PHOTOSWIPE -->
<script>
(function(window, PhotoSwipe){
			document.addEventListener('DOMContentLoaded', function(){
				var
					options = {},
					instance = PhotoSwipe.attach( window.document.querySelectorAll('#Gallery a'), options );
			
			}, false);
		}(window, window.Code.PhotoSwipe));
</script>
<!-- END PHOTOSWIPE -->