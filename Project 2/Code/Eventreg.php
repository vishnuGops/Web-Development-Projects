<?php
    include('Authentication.php');
    include('Connection.php');
	$ename = filter_input(INPUT_POST, 'Eventname');
	$edate = filter_input(INPUT_POST, 'Date');
	$etime = filter_input(INPUT_POST, 'time');
	$eloc = filter_input(INPUT_POST, 'Place');
	$edesc = filter_input(INPUT_POST, 'description');
	$email = $_SESSION['email'];
	if(!empty($ename)){
		if(!empty($eloc)){
		 if(mysqli_connect_error()){
		     die('Connect error '.mysqli_connect_errno() .') '.mysqli_connect_error());
        }
        else{
            $adsql = "SELECT aid from Admin WHERE aemail = '$email'";
            $adresult = $conn->query($adsql);
            if($adresult->num_rows > 0){
                while($row = $adresult->fetch_assoc()){
                    $aid = $row['aid'];
                    $date = $edate.$etime;
                    $sql = "INSERT INTO Event (title,aid,date,content,location) values ('$ename','$aid','$date','$edesc','$eloc')";
                    if ($conn->query($sql)){
                        header("Location:AdminPage.php");
                    }
                    else{
                         echo "Error: ". $sql ."
                             ". $conn->error;
                    }
                }
            }
            else
                echo "No rows returned";
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