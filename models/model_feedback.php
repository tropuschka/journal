<?php
	class Model_Feedback extends Model {
		public function send_data($data = null) {
			//добавление данных из data
			if (!empty($data)) {
				$result = $this -> executeQuery("INSERT INTO feedback (user, comment, email) VALUES ('".$data['user']."', '".$data['comment']."', '".$data['email']."');");

					//Код ошибки для ошибки запроса
					if (!result) {
						$result = mysqli_error($this -> mysqli);
					}
			} else {
				//Если что-то не так с данными
				$result = 'Empty data!';
			}
			return $result;
		}
	}
?>