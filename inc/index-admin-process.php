		<?php
            if (isset($_SESSION['login'])) {
			if (isset($_GET['l'])) {
				if ($_GET['l'] != "t" && ($_GET['l'] != "rp") && ($_GET['l'] != "as") && ($_GET['l'] != "about")) {
					include('templates/signin-form.php');
				} elseif ($_GET['l'] == "t") {
                    include('templates/user-info.php');
                } elseif ($_GET['l'] == "as") {
					include('templates/associate-signin-list.php');
				} elseif ($_GET['l'] == "o") {
                    header('location:templates/logout.php');
                    exit();
                } elseif ($_GET['l'] == "rp") {
                	include('templates/report.php');
                } elseif ($_GET['l'] == "about") {
                    echo '<h1>Welcome to our Santa Clara Office!</h1>';
                    echo '<p>This is an Electronic Sign-In Page v1.0</p>';
				} else {

				}
			} } else {
                if (!isset($_SESSION['login'])) {
                    if ($_GET['l'] == "about") {
                        echo '<h1>Welcome to our Santa Clara Office!</h1>';
                        echo '<p>This is an Electronic Sign-In Page v1.0</p>';
                    } else {
                        include('templates/signin-form.php');
                    }                        
                }         
            }
		?>