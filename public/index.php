<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>discoverfor.me ― Amplify your repertoire</title>
	<meta name="author" content="humans.txt">
	<meta name="description" content="Find out new influences, amplify your repertoire.">
	<meta name="keywords" content="music, discover, new, sound, audio, similar, albums, tracks, artists, repertoire">
	
	<meta name="viewport" content="width=device-width">
	
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="image_src" href="http://discoverforme.orchestra.io/images/dfm.png?2">
	<link rel="stylesheet" href="/css/style.css?<?php echo time(); ?>">
	
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="/js/dojo.js"></script>
	<script src="/js/main.js?<?php echo time(); ?>"></script>
	
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-30333344-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</head>
<?php flush(); ?>
<body>
	<header>
		<form id="search-form">
			<input id="search-term" class="search-field" type="search" value="" placeholder="C'mon, try an artist!" autofocus required>
			<input id="search-submit" class="search-field" type="submit" value="▸">
		</form>
	</header>
	<div id="help"></div>
	<div id="author">
		<a href="http://rafaelcanovas.com/" target="_blank">
			<img src="/images/rafaelcanovas.png" alt="&copy; 2012 Rafael Canovas" title="&copy; 2012 Rafael Canovas">
		</a>
	</div>
</body>
</html>
