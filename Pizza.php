<?php


require_once('./Meal.php');

class Pizza extends Meal{
	private $base;

	private $ingredient1;

	private $ingredient2;

	private $ingredient3;


	function __construct($size, $base, $ingredient1, $ingredient2, $ingredient3) {
		$this->size = $size;
		$this->base = $base;
		$this->ingredient1 = $ingredient1;
		$this->ingredient2 = $ingredient2;
		$this->ingredient3 = $ingredient3;

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

	public function getIngredients() {
		return [$this->ingredient1, $this->ingredient2, $this->ingredient3];
	}

	public function getOrderedAt() {
		return $this->orderedAt->format('d/m/Y - H:i:s');
	}
}

$pizzaRaph = new Pizza("xl", "tomate", "jambon", "champignons", "oeuf");
$pizzaRaph->pay();
$pizzaRaph->ship();



foreach ($pizzaRaph->getIngredients() as $ingredient) { ?>
	<p><?php echo $ingredient; ?></p>
<?php } ?>

<p>Date de commande : <?php echo $pizzaRaph->getOrderedAt(); ?></p>