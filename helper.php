<?php
session_start();
// include 'tbl_location.php';
// include 'tbl_ride.php';
 include_once 'class/tbl_user.php';

// print_r($_POST);
$selectuser=new tbl_user();
if (isset($_POST['action'])) {

    $action = $_POST['action'];
    // $name =$_POST['cedname'];
    // $password = $_POST['cedpassword'];
    // $email_id = $_POST['cedemail'];
    // $mobile = $_POST['cedmobile'];

    switch ($action) {

        case 'emailcheck': {
            $email_id = $_POST['cedemail'];
            $_SESSION["email"] = $email_id;
            $selectdata = $selectuser->ced_emailCheck($email_id);
            echo $selectdata;
            }
            
            break;
            
            case 'emailcheckotp': {
            $cedemailotp = $_POST['cedemailotp'];
            $selectdata = $selectuser->ced_emailCheckotp($cedemailotp);
            echo $selectdata;
            }break;
        case 'insert':
            { $name =$_POST['cedname'];
                $password = $_POST['cedpassword'];
                
                $mobile = $_POST['cedmobile'];
                $email_id = $_SESSION["email"];
                $is_admin=0;
                $insertdata = $selectuser->ced_registerUser($email_id, $name, $mobile,  $password,$is_admin);
                
                echo $insertdata;
                
                }

            break;
        case 'select':
            echo "WOW";
            break;
        default:
            echo "Something Went Wrong";
    }
} else {
    die("<h1> WOO!! You Can't access </h1>");
}