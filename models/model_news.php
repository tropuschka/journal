<?php
	//расширение класса модели
	class Model_News extends Model {
		//метод get_data из контроллера news
		public function get_data() {
			//вызов родительского класса Model и исполнение sql-запроса
			$result = $this -> executeQuery("SELECT * FROM last_news");
			//результат
			return $result;
		}
	}
?>