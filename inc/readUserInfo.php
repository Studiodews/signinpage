<?php
include("db.php");

if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // get User ID
    $user_id = $_POST['id'];

    // Get User Details
    $query = $db->select('SELECT * FROM tblinfo WHERE info_id = ?', array('info_id'=>$_POST['id']), array('%d'));
    $response = array();
    foreach ($query as $qy):
        $response = $qy;
    endforeach;
    echo json_encode($response);
}
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}