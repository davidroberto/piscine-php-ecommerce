<?php require_once('../controller/listProductsBddController.php'); ?>



<?php foreach ($products as $product) { ?>
	<article>
		<h1><?php echo $product['titre']; ?></h1>
		<h2><?php echo $product['sous_titre']; ?></h2>
		<p><?php echo $product['description']; ?></p>
	</article>

<?php } ?>
