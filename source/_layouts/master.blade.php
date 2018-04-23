<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">

	<title>Gauguin</title>

	<!-- Includes -->
	<link href="css/reset.css" rel="stylesheet">
	<script src="//code.jquery.com/jquery-3.2.1.slim.min.js" type="text/javascript"></script>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Amiri:400,400i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">

	<!-- Swiper -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.min.js"></script>

	<!-- video.js -->
	<link href="//vjs.zencdn.net/5.11/video-js.min.css" rel="stylesheet">
	<script src="//vjs.zencdn.net/5.11/video.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/videojs-youtube/2.3.2/Youtube.min.js"></script>

	<!-- OpenSeadragon -->
	<script src="https://cdn.jsdelivr.net/npm/openseadragon@2.2/build/openseadragon/openseadragon.min.js"></script>

	<!-- Site-specific -->
	<link href="css/main.css" rel="stylesheet">
	<script src="js/main.js" type="text/javascript"></script>

	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MQBCFS"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
							  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
							      '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	 })(window,document,'script','dataLayer','GTM-MQBCFS');</script>
	<!-- End Google Tag Manager -->
</head>

<body>

@yield('body')

{{-- Add templates for lightbox and artworks --}}
@include('_partials.lightbox')


</body>

</html>
