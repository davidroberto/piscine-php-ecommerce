<?php

require_once('./Meal.php');


class Hotdog extends Meal {

	private $bread;

	function __construct($size, $bread) {
		$this->size = $size;
		$this->bread = $bread;
		
		$this->status = "en cours de commande";
		$this->orderedAt = new DateTime("NOW");

		if ($size === "s") {
			$this->price = 8;
		} 

		if ($size === "m") {
			$this->price = 10;
		} 

		if ($size === "l") {
			$this->price = 12;
		} 

		if ($size === "xl") {
			$this->price = 14;
		} 

	}

}

$hotdogDavid = new Hotdog("xl", 'toasté');

