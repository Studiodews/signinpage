<?php
include("db.php");

if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    $query = $db->update("tblinfo",array("firstname"=>$first_name,"lastname"=>$last_name,"email"=>$email),array('%s','%s','%s'),array("info_id"=>$id),array('%d'));
}