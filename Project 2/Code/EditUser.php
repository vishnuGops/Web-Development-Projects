<?php
    include('Connection.php');
    include('Authentication.php');
   	$email1 = $_SESSION['email'];
	$name = filter_input(INPUT_POST, 'name');
	$password = filter_input(INPUT_POST, 'Password');
	$city = filter_input(INPUT_POST, 'Address');
	$phone = filter_input(INPUT_POST, 'phone');
	$_SESSION['email'] = $email;
	if(!empty($name)){
		if(!empty($password)){
            $sql = "UPDATE User SET uname = '$name',upass='$password',uphone='$phone',ucity='$city' WHERE uemail='$email1'";
            if($conn->query($sql)){
                header("Location:Login.html");
                session_destroy();
            }
            else
                echo "Error";
		 }
		else{
			echo "Password should not be empty";
			die();
		}
	}
	else{
		echo "Username should not be empty";
		die();
	}
?>