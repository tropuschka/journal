<?php
	//класс контроллера страницы 404
	class Controller_404 extends Controller {
		//уточнение события
		function action_index() {
			$this -> view -> generate('404_view.php', 'template_view.php');
		}
	}
?>