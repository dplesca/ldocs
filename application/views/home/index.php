<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Laravel 2 Documentation</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono' rel='stylesheet' type='text/css'>
	<?php echo Asset::styles(); ?>
</head>
<body>
	<div class="container">
		<h1><a href="/"></a></h1>
		<div class="row">
			<div class="span3">
				<div class="docs-nav"><?php echo $navigation;?></div>
			</div>
			<div class="span9">
				<div class="alert warning fade in hidden">
					<a class="close" data-dismiss="alert" href="#">&times;</a>
					<strong>This is Laravel 2.1 documentation.</strong> For Laravel 3 docs, refer to <a href="http://three.laravel.com/">Laravel 3 docs</a>, for current version docs please refer to the <a href="http://laravel.com/docs">official docs</a>.
				</div>
				<div class="docs-content">
					<?php echo $content;?>
				</div>
			</div>
		</div>
		<a class="to_top hidden" href="#top">Top</a>
	</div>
	<footer class="container">
		<div class="row">
			<div class="span12">
				<p>Created with <a href="http://laravel.com" target="_blank">Laravel 2.1</a>, <a href="http://michelf.com/projects/php-markdown/" target="_blank">PHP Markdown</a>, <a href="http://jquery.com/" target="_blank">jQuery</a>, <a href="http://code.google.com/p/google-code-prettify/" target="_blank">Google prettify</a>, <a href="http://imakewebthings.com/jquery-waypoints/" target="_blank">jQuery Waypoints</a>. Looks by <a href="http://twitter.github.com/bootstrap/" target="_blank">Twitter Bootstrap</a>, <a href="http://www.google.com/webfonts" target="_blank">Google web fonts</a> and <a href="http://subtlepatterns.com/" target="_blank">SubtlePatterns</a>.</p>
			</div>
		</div>
	</footer>
	
	<?php echo Asset::scripts(); ?>
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-5915627-8']);
	_gaq.push(['_trackPageview']);
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>
</body>
</html>
