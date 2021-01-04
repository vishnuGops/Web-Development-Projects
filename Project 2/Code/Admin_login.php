<?php
    session_start();
    include('Connection.php');
	$username = filter_input(INPUT_POST, 'email');
	$password = filter_input(INPUT_POST, 'pass');
	$_SESSION["email"]=$username;
	if(!empty($username)){
		if(!empty($password)){
		 if(mysqli_connect_error()){
		     die('Connect error '.mysqli_connect_errno() .') '.mysqli_connect_error());
        }
        else{
            $sql = "SELECT apass from Admin WHERE aemail = '$username'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    if($row["apass"]==$password)
                        header("Location:AdminPage.php");
                    else
                        echo $password.$username;
                }
            }
            else
                header("Location:Admin_login.html");
            $conn->close();
		 }
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