<?php
/**
 * Created by PhpStorm.
 */

include __DIR__ . '/conf.php'; // подключаю файл конфигов
include __DIR__ . '/classes/GuestBook.php'; // подключаю клас гостевой книги

$db = new GuestBook(PATH); // создал экземпляр класса
$text = $_POST['text_inp']; // принял значение из формы
$db->append($text); // отправил значение из формы на добавление

$data = $db->getData();
include __DIR__ . '/vi/vi.php';
//$db->save();
// форма
