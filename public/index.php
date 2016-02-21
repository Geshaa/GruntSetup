<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Grunt Init Project</title>
	<link rel="stylesheet" href="assets/front/css/style.css">
</head>

<body>
	<?php $f = 'assets/front/svg/shapes.svg'; if (file_exists($f)) { include($f); } ?>

	<h1 id="heading">
		just for test if it is working 1
	</h1>

	<!-- It is not bootstrap - just the syntax is the same and functionality is the same	 -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
			    <div class="box">Responsive 1</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">
			    <div class="box">Responsive 2</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			    <div class="box">Responsive 3</div>
			</div>
		</div>
	</div>



	<span class="mtrigger"><svg style="fill:red; display:inline-block; width:100px;height: 100px;"><use xlink:href="#svg-facebook"></use></svg></span>

	<div class="spriteTest"></div>

	<!--	<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>-->
	<script src="assets/front/js/scripts.js"></script>
	<!-- Delete livereload.js on production -->
	<script src="http://localhost:35755/livereload.js"></script>
</body>
</html>
