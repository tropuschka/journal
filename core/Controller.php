<?php
	class Controller {
		//Свойства контроллера
		public $model;
		public $view;

		function __construct() {
			$this -> view = new View();
		}

		//Общий метод
		function action_index () {
			
		}
	}
?>