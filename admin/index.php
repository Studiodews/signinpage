<?php
require_once('../inc/db.php');
require_once('../inc/functions.php');
require_once('templates/header.php');
?>
<?php require_once('templates/navigation.php');?>
<div id="body" class="container">
	<div id="userRecord">		
    <?php require_once('../inc/index-admin-process.php'); ?>
	</div>
</div>
<?php
    require_once('templates/userinfo-modal.php');
    require_once('templates/footer.php'); 
?>