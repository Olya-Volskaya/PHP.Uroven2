<?php

trait SingletonTrait {
	private static $instance;
	public static function getInstance() {
		if (empty(self::$instance)) 
			self::$instance = new static();
		return self::$instance;
	}
	private function __construct() {
	}
	private function __clone() {
	}
	private function __wakeup() {
	}
}

class Test {
	use SingletonTrait;
	public $value = 0;
}

$a = Test::getInstance();
echo $a->value;

$a->value = 5;
echo $a->value;

$b = Test::getInstance();
echo $b->value;

	