<?php require_once('../inc/functions.php'); ?>
<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="../assets/img/pfa_logo.jpg"/></a>
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		</div>
		<div class="navbar-collapse collapse" id="navbar-main">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_url(); ?>?l=t">Dashboard</a></li>
				<li><a href="<?php echo base_url(); ?>?q">Report</a></li>
				<li><a href="<?php echo base_url(); ?>?q=about">About</a></li>
			</ul>
			<?php if (isset($_SESSION['login'])) { ?>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url(); ?>templates/logout.php">Logout</a></li>
			</ul>			
			<?php } ?>
		</div>
	</div>
</nav>