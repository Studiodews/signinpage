		<?php if (isset($_GET['q'])) {
			if (!$_GET['q'] == "about" && !$_GET['q'] == 'guest') {
				echo '<h2>Please select one:</h2>';
				$data = $db->select('SELECT * FROM tblusertype', '', '');
				foreach ($data as $d) {
					echo '<a href="?q='.strtolower($d->user_type_name).'" class="btn btn-primary btn-lg btnusertype">'.$d->user_type_name.'</a>';
				}
			} elseif ($_GET['q'] == "guest") {
				echo '<h3>Guest Sign-in</h3>';
				require_once('templates/guest-signin-form.php');
			} elseif ($_GET['q'] == "g_finish") {
				echo '<h2>Thank you for signing in '.$_GET['r'].'!</h2>';
				echo 'Please wait for your name badge to print before joining us in our meeting room for our Financial Opportunity Seminar!';
			} elseif ($_GET['q'] == "new") {
				echo '<h3>New User Registration</h3>';
				require_once('templates/associate-new-signin-form.php');
			} elseif ($_GET['q'] == "associate") {
				echo '<h2>Associate Sign-In</h2>';
				echo '<h3>Please select one:</h3>';
				echo '<a href="?q=new" class="btn btn-primary btn-lg btnusertype">New User</a>';
				echo '<a href="?q=registered" class="btn btn-primary btn-lg btnusertype">Registered User</a>';
			} elseif ($_GET['q'] == "new_finish") {
				echo '<h2>Thank you for registering '.$_GET['r'].'!</h2>';
				echo 'To sign-in next time, please select “Registered User” and provide required information.';
			} elseif ($_GET['q'] == "registered") {
				echo '<h3>Registered User Sign-in</h3>';
				require_once('templates/associate-registered-signin-form.php');
			} elseif ($_GET['q'] == "registered_finish") {
				echo '<h2>Thank you for signing in!</h2>';
				echo 'Please proceed to the meeting room for our Financial Opportunity Seminar!';
			} else {
				echo '<p>This is an Electronic Sign-In Page v1.0</p>';
			}
		} else { 
		?>
<a class="btn btn-primary btn-lg" href="?q">Sign In</a>
		<?php } ?>