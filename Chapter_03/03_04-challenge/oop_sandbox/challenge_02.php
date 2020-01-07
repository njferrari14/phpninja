<?php

class Mammals {

	var $lays_eggs = false;
	var $has_fur = true;
	var $kingdom = 'animals';
	var $size = 'varies';
	var $name;

}

class Cats extends Mammals {

	var $lifespan = 20;

	function can_purr() {
		
		if ($this->size === 'large') {
			return 'Probably not.';
		} elseif (($this->size === 'small') || ($this->name === 'cheetah')) {
			return 'Yes.';
		} else {
			return 'Who knows.';
		}

	}

}

$cheetah = new Cats;

$cheetah->name = 'cheetah';
$cheetah->size = 'large';

echo $cheetah->name . "<br />";
echo $cheetah->can_purr();

?>