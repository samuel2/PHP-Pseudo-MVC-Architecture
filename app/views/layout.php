<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $meta_title ?></title>
	
	<link rel="stylesheet" type="text/css" href="public/css/style.css">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	
	<nav>
		<h2>Menu</h2>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="#">Item 1</a></li>
			<li><a href="#">Item 2</a></li>
			<li><a href="#">Item 3</a></li>
			<li><a href="#">...</a></li>
		</ul>
	</nav>

	<?= $content ?>


	<footer>
		Footer Page
	</footer>

	<script src="public/js/app.js"></script>
</body>
</html>