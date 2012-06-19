<!DOCTYPE html>
<html>
	<head>
		<title>Exclude me from Google Analytics!</title>
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', '<? require('ga_account.php'); ?>']);
			_gaq.push(['_trackPageview']);
			_gaq.push(['_setVar', 'exclude_me']); // custom cookie for filtering site owner

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</head>

	<body>
		<h1>You've been excluded from Google Analytics now!</h1>
		<p>You will no longer appear in your website traffic reports. This is a good thing, because you don't want your visits to skew the traffic data.</p>
	</body>
</html>
