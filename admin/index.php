<?php
require_once('../inc/db.php');
require_once('../inc/functions.php');
require_once('templates/header.php');
?>
<body>
<?php require_once('templates/navigation.php');?>
<div class="container">
	<div id="userRecord" class="row">		
		<?php
			if (isset($_GET['l'])) {
				if ($_GET['l'] != "t") {
					include('templates/signin-form.php');
				} elseif ($_GET['l'] == "t") {
					include('templates/user-info.php');
				} elseif ($_GET['l'] == "o") {
					header('location:templates/logout.php');
					exit();
				} else {

				}
			}
		?>
	</div>
</div>
    <!-- Modal - Update User details -->
    <div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Update</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="update_first_name">First Name</label>
                        <input type="text" id="update_first_name" placeholder="First Name" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="update_last_name">Last Name</label>
                        <input type="text" id="update_last_name" placeholder="Last Name" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="update_email">Email Address</label>
                        <input type="text" id="update_email" placeholder="Email Address" class="form-control"/>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Save Changes</button>
                    <input type="hidden" id="hidden_user_id">
                </div>
            </div>
        </div>
    </div>
    <!-- // Modal -->
<?php require_once('templates/footer.php'); ?>