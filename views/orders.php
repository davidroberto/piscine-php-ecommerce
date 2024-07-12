<?php require_once('../controller/ordersController.php'); ?>

<?php require_once('../partials/header.php'); ?>


<body>

<h1>Toutes les commandes : </h1>

<?php foreach($orders as $order) { ?>

	<article>

	<p>id : <?php echo $order['id']; ?></p>
	<p>client : <?php echo $order['customer']; ?></p>
	<p>montant : <?php echo $order['amount']; ?></p>

	<?php $date = new DateTime($order['date']); ?>
	<?php echo $date->format('d/m/Y'); ?>

	<h2>Produits commandés : </h2>
	<?php foreach($order['products'] as $product) {?>

		<p><?php echo $product; ?></p>

	<?php } ?>

	</article>

<?php } ?>


</body>

<?php require_once('../partials/sidebar.php'); ?>

<?php require_once('../partials/footer.php'); ?>