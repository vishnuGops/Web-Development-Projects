<?php
    include('Connection.php');
    include('Authentication.php');
    $title = $_REQUEST['Ename'];
    $email = $_SESSION['email'];
    $msg = "You have registered for ".$title." event";
    mail($email,"Event Registration",$msg);
    if(!empty($email)){
		if(!empty($title)){
		 if(mysqli_connect_error()){
		     die('Connect error '.mysqli_connect_errno() .') '.mysqli_connect_error());
        }
        else{
            $sql = "SELECT eid from Event WHERE title = '$title'";
            $result = $conn->query($sql);
                 if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $eid = $row['eid'];
                    $q = "INSERT INTO EventReg (eid,uemail) values ('$eid','$email')";
                    if($conn->query($q)){
                        header("Location: Events_view.php");
                    }
                    }
                }
            else
                echo "No rows returned";
            $conn->close();
		 }
		}
		else{
			echo $title;
			die();
		}
	}
	else{
		echo "Username should not be empty";
		die();
	}
