<?php
    include('Connection.php');
    include('Authentication.php');
    $eid = $_REQUEST['Ename'];
    $email = $_SESSION['email'];
    if(!empty($email)){
		if(!empty($eid)){
		 if(mysqli_connect_error()){
		     die('Connect error '.mysqli_connect_errno() .') '.mysqli_connect_error());
        }
        else{
            $sql = "DELETE from EventReg WHERE uemail = '$email' AND eid = '$eid'";
            $conn->query($sql);
            header("Location: Events_view.php");
        }
		}
		else 
		    echo "eid should not be null";
    }
?>
    