<?php

class Bicycle {
	var $brand;
	var $model;
	var $year;
	var $description;
	var $weight_kg;

	function name() {
		return $this->brand . " " . $this->model . " " . $this->year;
	}

	function weight_lbs() {
		return $this->weight_kg * 2.204622618;
	}

	function set_weight_lbs($lbs) {
		$this->weight_kg = $lbs / 2.204622618;
	}
}

$bike1 = new Bicycle;
$bike2 = new Bicycle;

$bike1->brand = 'Chevy';
$bike1->model = 'Monte Carlo';
$bike1->year = '2005';
$bike1->description = 'Red, two-door, terrible condition.';
$bike1->weight_kg = '600';

$bike2->brand = 'Chevy';
$bike2->model = 'Lumina';
$bike2->year = '1993';
$bike2->description = 'White, four-door, terrible condition.';
$bike2->weight_kg = $bike2->set_weight_lbs(13567);


echo $bike1->name() . "<br />";
echo $bike2->name() . "<br />";

echo $bike1->weight_kg . "<br />";
echo $bike1->weight_lbs() . "<br />";
// notice that one is property, one is a method

$bike1->set_weight_lbs(2);
echo $bike1->weight_kg . "<br />";
echo $bike1->weight_lbs() . "<br />";

?>