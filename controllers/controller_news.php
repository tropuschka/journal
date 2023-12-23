<?php
	//наследование и уточнение методов класса Controller
	class Controller_News extends Controller {
		//вызов конструктора
		function __construct() {
			//экземпляр модели Model_News
			$this -> model = new Model_News();
			//экземпляр класса представления
			$this -> view = new View();
		}

		//метод действия по умолчанию
		function action_index() {
			//данные оt модели
			$data = $this -> model -> get_data();
			//передача данных в представление, указание имени файла шаблона и страницы
			$this -> view -> generate('news_view.php', 'template_view.php', $data);
		}
	}
?>