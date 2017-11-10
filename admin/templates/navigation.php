<?php require_once('../inc/functions.php'); ?>
<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo base_url(); ?>?l=t"><img src="../assets/img/pfa_logo.jpg"/></a>
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		</div>
		<div class="navbar-collapse collapse" id="navbar-main">
			<ul class="nav navbar-nav">
				<?php if (isset($_GET['l']) || !empty($_GET['l'])) { ?>
				<?php if ((($_GET['l'] == 't') || ($_GET['l'] == 'rp') || ($_GET['l'] == 'about') || ($_GET['l'] == 'as')) && isset($_SESSION['login'])) { ?>
				<li class="dropdown">
	              <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url(); ?>?l=t" id="download" aria-expanded="true">Dashboard <span class="caret"></span></a>
	              <ul class="dropdown-menu" aria-labelledby="download">
	                <li><a href="<?php echo base_url(); ?>?l=t">List of Registered Users</a></li>
	                <li class="divider"></li>
	                <li><a href="<?php echo base_url(); ?>?l=as">List of Sign In Associate</a></li>
	              </ul>
	            </li>
				<li><a href="<?php echo base_url(); ?>?l=rp">Report</a></li>
				<?php } else { ?> 
				<li><a href="<?php echo str_replace("admin/", "", base_url()); ?>">Back to Front</a></li>
				<?php } } else { ?>
				<li><a href="<?php echo str_replace("admin/", "", base_url()); ?>">Back to Front</a></li>
				<?php } ?>
				<li><a href="<?php echo base_url(); ?>?l=about">About</a></li>
			</ul>
			<?php if (isset($_SESSION['login'])) { ?>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url(); ?>templates/logout.php">Logout</a></li>
			</ul>			
			<?php } ?>
		</div>
	</div>
</nav>