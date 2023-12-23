<?php
	class Model_About extends Model {
		public function get_data($id = -1) {
			//Выбор только одной записи
			if ($id <> -1) {
				$result = $this->executeQuery("SELECT * FROM authors WHERE id = ".$id);
			} else {
				//Весь список авторов для id равного -1
				$result = $this -> executeQuery("SELECT * FROM authors;");
			}
			return $result;
		}
	}
?>