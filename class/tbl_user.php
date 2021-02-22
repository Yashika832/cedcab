<?php
include_once 'Dbcon.php';
include_once 'sendmail.php';

class tbl_user extends Dbcon{
     public $user_id;
     public $email_id;
     public $name;
     public $dateofsignup;
     public $mobile;
     public $status;
     public $password;
     public $is_admin;


function __construct()
{
$dbcon = new Dbcon();
$this->conn = $dbcon->conn;


}

function ced_emailCheck($email_id)
{

try {

$sql = "SELECT `email_id` FROM `tbl_user` WHERE `email_id`='$email_id'";

$res = $this->conn->query($sql);

if ($res->num_rows > 0) {

return 0;
} else {

$sendmailer = new sendmail();
$mailsend = $sendmailer->sendemailOtp($email_id);
return $mailsend;
}
} catch (Exception $e) {
return $e;
}
}

function ced_emailCheckotp($cedemailotp)
{
try {
if ($cedemailotp == $_SESSION["emailotp"]) {
unset($_SESSION["emailotp"]);

return 1;
} else {
return 0;
}

} catch (Exception $e) {
return $e;
}

}


function ced_registerUser($email_id, $name, $mobile, $password,$is_admin)
{


try {

$sql = "INSERT INTO `tbl_user`( `email_id`, `name`, `dateofsignup`, `mobile`, `status`, `password`,`is_admin`) VALUES ('$email_id','$name',now(),'$mobile','1','$password','$is_admin')";


$res = $this->conn->query($sql);

if ($res == true) {
echo "Record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $this->conn->error;
}
} catch (Exception $e) {
return $e;
}
}
     
}