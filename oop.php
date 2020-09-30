<?php

class House {
	public $name;
	public $color;
	public function setData($name, $color) {
		$this -> my_name = $name;
		$this -> my_color = $color;
	}
	public function PrintData() {
		echo "The color of the {$this -> my_name} is {$this -> my_color}";
	}
}
$blackHouse = new House();
$whiteHouse = new House();

$blackHouse -> setData("Ziad's House", "black");
$whiteHouse -> setData("Mohaned's House", "white");

$blackHouse -> PrintData();
echo '<br>';
$whiteHouse -> PrintData();

?>