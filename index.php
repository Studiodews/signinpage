<?php
require_once('inc/db.php');
require_once('inc/functions.php');
require_once('templates/header.php');
?>
<?php require_once('templates/navigation.php');?>
<div id="body" class="container">
	<div class="row">		
		<h1>Welcome to our Santa Clara Office!</h1>
		<?php include('inc/index-process.php'); ?>
	</div>
</div>
<?php require_once('templates/footer.php'); ?>