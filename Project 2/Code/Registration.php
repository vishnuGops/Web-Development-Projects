<?php
    include('Connection.php');
    session_start();
    $name = filter_input(INPUT_POST, 'name');
	$email = filter_input(INPUT_POST, 'email');
	$password = filter_input(INPUT_POST, 'Password');
	$city = filter_input(INPUT_POST, 'Address');
	$phone = filter_input(INPUT_POST, 'phone');
	$msg = "You have successfully registered with Gente & Ciudad";
    mail($email,"Registration",$msg);
	$_SESSION['email'] = $email;
	if(!empty($name)){
		if(!empty($password)){
		   
            $sql = "INSERT INTO User (uname,uemail,upass,uphone,ucity) values ('$name','$email','$password','$phone','$city')";
            if ($conn->query($sql)){
                header("Location:User_dash.php");
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