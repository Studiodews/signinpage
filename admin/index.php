<?php
require_once('../inc/db.php');
require_once('../inc/functions.php');
require_once('templates/header.php');
?>
<body>
<?php require_once('templates/navigation.php');?>
<div class="container">
	<div class="row">		
		<?php
			if (isset($_GET['l'])) {
				if ($_GET['l'] != "t") {
					include('templates/signin-form.php');
				} elseif ($_GET['l'] == "t") {
					include('templates/user-info.php');
				} else {

				}
			}
		?>
	</div>
</div>
<?php require_once('templates/footer.php'); ?>