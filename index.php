<?php
	//подключение модели, контроллера, представления и роутинга
	require_once 'core/Model.php';
	require_once 'core/View.php';
	require_once 'core/Controller.php';
	require_once 'core/Route.php';

	//запуск
	Route::start();
?>