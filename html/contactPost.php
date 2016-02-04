<?php
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];

echo json_encode(array('success'=>true, email'=>$email, 'phone'=>$phone));
?>
