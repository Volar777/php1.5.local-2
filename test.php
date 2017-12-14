<?php
/**
 * Created by PhpStorm.
 * User: OS
 * Date: 10.12.2017
 * Time: 16:59
 */
//echo 777;

class Sss {

//	public $ss =55;
	private $ss =55;
//	public $ss =55;

	public function show() {
		echo 1;
	}
}

//$q = new Sss;
//echo $q->ss;
//$q->show();

/*class Item{

	private $color = 'red'; // в доме
	protected $color2 = 'blue'; // во дворе
//	protected $color = 'red';
//	public $color = 'red';
	public $matetial; // на улице

	public function __construct(...$www) {
		var_dump($www);
	}
}

class Table extends Item {

	public function show(){
		echo 77;
	}

//	public function showC(){
//		echo $this->color;
//	}

	public function showC2(){
		echo $this->color2;
	}
}

$n = new Item;
//echo $n->color, '<br>';
//$n->matetial = 'metall';
$d = new Table(1,2,3);
//$d->show();
$d->showC();
$d->showC2();
//echo $d->color;*/

///////////////////////////
class Asd{

	protected $ss = 7;
	protected function ss(){
		echo 42;
	}
}

class Zxc extends Asd{
	public function ss(){
		echo 123, '<br>';
		parent::ss();  // вызов исходного метода родитенля!!!// вызов метода из родителя
		///вызов любого метода из класса родителя
	}
}

$w = new Zxc();
$w->ss();





























