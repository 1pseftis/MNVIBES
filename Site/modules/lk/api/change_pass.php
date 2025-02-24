<?php
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/api/mysql.php');
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