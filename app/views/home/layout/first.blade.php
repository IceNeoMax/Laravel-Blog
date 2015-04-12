<html>
	<head>
		<link rel="stylesheet" type="text/css" href="https://googledrive.com/host/0B8z8ereLRdjhVXZIeTBsdU4wNFU">
		<link rel="stylesheet" type="text/css" href="https://googledrive.com/host/0B8z8ereLRdjhMHM2cmZPWE1IVW8">
		<script src="smooth-scroll-master/dist/js/bind-polyfill.js"> </script>
		<script src="smooth-scroll-master/dist/js/smooth-scroll.js"> </script>
		<title>Concept4</title>
		
	</head>
	
	<body>
		<div id="banner" class="banner">
			<div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; width:100%; height:600px; z-index: -999998; position: absolute;">
				<img src="https://googledrive.com/host/0B8z8ereLRdjhdUdyejJFaWpQdEE" style="position: absolute; margin: 0px; padding: 0px; border: none; width:100%; height:600px; z-index: -999999; left: 0px;">
			</div>
			<!--<img style="z-index:-999999; width:100%; height:500px; margin-bottom:30px;" src="1.jpg" >-->
			<div class="banner-caption">
				<span style="font-size:40px;">Fly Your   </span>
				<span class="word-top" style="font-size:60px; color: #55acee;">Imagination</br></span>
				<span class="word-top" style="position:absolute; font-size:30px; left:2%;">Don't live a serious life. Let it Fun!</span>
			</div>
		</div>
		<header class="header fixed clearfix navbar navbar-fixed-top">
			@yield('head')
		</header>
		
		
		<!--main-->
		<div id="main">
			<div class="container">
				<div class="row">
					@yield('listing')
				</div>
			</div>
		</div>	
	<script>
	smoothScroll.init();
	</script>
	</body>
</html>