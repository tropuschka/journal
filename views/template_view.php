<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Главная</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="bg_color-bleach">
	<nav class="navbar sticky-top bg_color-wisteria">
		<div class="container">
			<span class="navbar-brand mb-0 h1 text_color-bleach">Senceless News</span>
			<ul class="nav justify-content-end">
				<li class="nav-item">
					<a class="nav-link text_color-bleach" href="news">News</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text_color-bleach" href="about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text_color-bleach" href="feedback">Feedback</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container container-main bg_color-wisterialight py-4 px-md-5">
		<?php
			include 'views/'.$content_view;
		?>
	</div>

	<nav class="navbar bottom bg_color-wisteria">
		<div class="container justify-content-center">
			<span class="navbar-brand text_color-bleach">Udachina, 2023</span>
		</div>
	</nav>
	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>