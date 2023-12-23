<?php
	class Model {
		function __construct() {
			//Подключение ДБ
			$this -> mysqli = mysqli_connect("localhost", "myuser", "2605", "POSTS");

			//Проверка соединения с ДБ, вывод ошибки при отсутствии
			if ($this -> mysqli === false) {
				die ("ERROR: Could not connect. " .mysqli_connect_error());
			}
		}

		//Получение данных из БД
		public function executeQuery($query) {
			$res = $this -> mysqli -> query($query);
			return $res;
		}

		function __destruct() {
			//Освобождение памяти и закрытие соединения
			$this -> mysqli -> close();
		}
	}
?>