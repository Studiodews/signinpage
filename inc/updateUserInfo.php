<?php
include("db.php");

if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
    $user_type_id = $_POST['user_type_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $nick_name = $_POST['nick_name'];
    $contact_no = $_POST['contact_no'];
    $email = $_POST['email'];
    $who_invited = $_POST['who_invited'];  
	  
	$query = $db->update("tblinfo",array("firstname"=>$first_name,"lastname"=>$last_name,"nickname"=>$nick_name,"contact_no"=>$contact_no,"email"=>$email,"who_invited"=>$who_invited),array('%s','%s','%s','%s','%s','%s'),array("info_id"=>$id),array('%d'));      
}