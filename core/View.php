<?php
	class View {
		//Указание имени контроллера и общего шаблона, передача данных (при наличии)
		function generate($content_view, $template_view, $data = null) {
			/*
			if(is_array($data)) {
				//Преобразование элементов в переменные
				extract($data);
			}
			*/

			include 'views/'.$template_view;
		}
	}
?>