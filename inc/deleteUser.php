<?php
include('db.php');

if(isset($_POST)) {
	$id = $_POST['id'];
	$db->delete("tblinfo","info_id",$id);
}