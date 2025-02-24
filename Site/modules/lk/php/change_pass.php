<?php
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
$password = $mysqli->query("select password from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->password;

if (password_verify(urldecode($_POST['pass1']), $password)){
	if (urldecode($_POST['pass1'])!=urldecode($_POST['pass2'])) {
        if (strlen(urldecode($_POST['pass2'])) >= 8 && strlen(urldecode($_POST['pass2'])) <= 16) {		
		    if (urldecode($_POST['pass2'])==urldecode($_POST['pass3'])) {
			    $mysqli->query("UPDATE dle_users SET `password`='".password_hash(urldecode($_POST['pass2']), PASSWORD_DEFAULT)."' WHERE name='$login'"); 
                echo "<script>success_pass()</script>";		
		    } else {
			    echo "<script>uncorect_pass3()</script>";
	        }
	    } else {
		    echo "<script>uncorect_pass2()</script>";
	    }
	} else {
	    echo "<script>uncorect_pass1_2()</script>";
	}
} else {
	echo "<script>uncorect_pass1()</script>";
}
?>