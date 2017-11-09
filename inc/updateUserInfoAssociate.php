<?php
include("db.php");

if(isset($_POST))
{
    // get values
    $id = $_POST['id1'];
    $user_type_id = $_POST['user_type_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $nick_name = $_POST['nick_name'];
    $contact_no = $_POST['contact_no'];
    $email = $_POST['email'];
	$pfa_agent_code = $_POST['pfa_agent_code'];
	$who_upline_qfd = $_POST['who_upline_qfd'];
	$who_direct_upline = $_POST['who_direct_upline'];  
	  
	$query = $db->update("tblinfo",array("firstname"=>$first_name,"lastname"=>$last_name,"nickname"=>$nick_name,"contact_no"=>$contact_no,"email"=>$email,"pfa_agent_code"=>$pfa_agent_code,"who_upline_qfd"=>$who_upline_qfd,"who_direct_upline"=>$who_direct_upline),array('%s','%s','%s','%s','%s','%s','%s','%s'),array("info_id"=>$id),array('%d'));
}