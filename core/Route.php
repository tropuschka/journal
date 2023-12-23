<?php
	class Route {
		public function getPathArray() {
			$BASE_URL = 'localhost:8080/journal/';
			//Переменная с массивом вложенности
			$pathArray = [];

			//Перемещение в корневую папку
			//Текущий адрес
			$currentPath = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

			if (strpos($currentPath, $BASE_URL) >= 0) {
				$tmpPath = substr($currentPath, strlen($BASE_URL));
			}

			//$_SERVER['REQUEST_URI'] - URI, предоставленный для доступа к странице
			$tmpArray = explode("/", $tmpPath);

			//Заполнение $tmpArray через фильтр значений
			$pathArray = array_values(array_filter($tmpArray, function($element) {
				return !empty($element);
			}));

			//Возвращение списка элементов в URI
			return $pathArray;
		}

		static function start() {
			//Контроллер и действие по умолчанию
			$controller_name = 'News';
			$action_name = 'index';

			//Массив с роутингом
			$routes = self::getPathArray();

			//имя контроллера
			if (!empty($routes[0])) {
				$controller_name = $routes[0];
			}

			//имя действия
			if (!empty($routes[1])) {
				$action_name = $routes[1];
			}

			//добавление префиксов
			$model_name = 'Model_'.$controller_name;
			$controller_name = 'Controller_'.$controller_name;
			$action_name = 'action_'.$action_name;

			//файл с классом модели
			$model_file = strtolower($model_name).'.php';
			$model_path = "models/".$model_file;

			if (file_exists($model_path)) {
				include "models/".$model_file;
			}

			//файл с классом контроллера
			$controller_file = strtolower($controller_name).'.php';
			$controller_path = "controllers/".$controller_file;

			if (file_exists($controller_path)) {
				include "controllers/".$controller_file;
			} else {
				//страницa 404
				Route::ErrorPage404();
			}

			//контроллер и действие с моделью
			$controller = new $controller_name;
			$action = $action_name;

			//вызов действия контроллера
			if (method_exists($controller, $action)) {
				//действие контроллера
				$controller -> $action();
			} else {
				//страница 404
				Route::ErrorPage404();
			}
			
		}

		//редирект на страницу 404 для внештатных ситуаций
		function ErrorPage404() {
			$host = 'http://'.$_SERVER['HTTP_HOST'].'/journal/';
			header('HTTP/1.1 404 Not Found');
			header('Status: 404 Not Found');
			header('Location:'.$host.'404');
		}
	}
?>