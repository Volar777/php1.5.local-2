<?php

/**
 * 1. Создайте класс GuestBook, который будет удовлетворять следующим требованиям:
 * - В конструктор передается путь до файла с данными гостевой книги,
 * в нём же происходит чтение данных из нее (используйте защищенное свойство объекта для хранения данных)
 *
 * - Метод getData() возвращает массив записей гостевой книги
 *
 * - Метод append($text) добавляет новую запись к массиву записей
 *
 * - Метод save() сохраняет массив в файл
 *
 * 2.* Продумайте - какие части функционала можно вынести в базовый (родительский) класс TextFile, а какие - сделать в унаследованном от него классе GuestBook
 */

class TextFile {

	protected $data;

	public function getData() {
		return $this->data;
	}

	public function __construct($path) {
		$this->data = file($path);
		//		var_dump($this->data);
	}

}
class GuestBook extends TextFile {

	/*public function append($text){
		$text = "\n" . $text;
		file_put_contents(PATH, $text,FILE_APPEND);
	}*/

	public function append($text){
		if(!empty($text)){
			$this->data[] = "\n" . $text;
			$this->save();
		}
	}

	public function save(){
		file_put_contents(PATH, $this->data);
	}
}

