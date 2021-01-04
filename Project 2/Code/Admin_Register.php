<?php
    include('Connection.php');
    session_start();
    $name = filter_input(INPUT_POST, 'name');
	$email = filter_input(INPUT_POST, 'email');
	$password = filter_input(INPUT_POST, 'password');
	$msg = "You have successfully registered with Gente & Ciudad";
    mail($email,"Registration",$msg);
	$city = filter_input(INPUT_POST, 'City');
	$_SESSION['email'] = $email;
	if(!empty($name)){
		if(!empty($password)){
		   
            $sql = "INSERT INTO Admin (aname,aemail,apass,acity) values ('$name','$email','$password','$city')";
            if ($conn->query($sql)){
                header("Location:AdminPage.php");
            }
            else{
                echo "Error: ". $sql ."
                ". $conn->error;
            }
            $conn->close();
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