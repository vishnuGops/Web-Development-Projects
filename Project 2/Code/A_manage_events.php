<?php
    include('Connection.php');
    include('Authentication.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./ciudad.css">
    <meta charset="UTF-8">
    <title>Manage Events</title>
</head>
<body>
<div class="font">
    <div class = "logo">
        <img src="./img/i.jpg" alt="GENTE & CIUDAD LOGO" width="150" height="120" />
    </div>
    <div class = "tabs" >
        <a style="text-decoration: none" href = "Inicio.html">Inicio</a><a>&emsp;/&emsp;</a><a style="text-decoration: none" href = "AboutUs.html">Nosotros</a><a>&emsp;/&emsp;</a><a style="text-decoration: none" href = "NuestrosEquipos.html">Equipos</a><a>&emsp;/&emsp;</a><a  style="text-decoration: none" href = "NuestroBlog.html">Blog</a><a>&emsp;/&emsp;</a><a style="text-decoration: none" href="ContactUs.html">Contacto</a><a>&emsp;/&emsp;</a><a style="text-decoration: none" href = "Login.html">Inicio de Sesion</a>

    </div>
    <div class = "PageTitle">
        <div class = "Title-text">
            <p style="font-size: 32px">MANAGE EVENTS</p>
            <p>ADMIN -> MANAGE EVENTS</p>
        </div>
    </div>

    <h2 style="position: relative; left: 10%">Welcome <?php echo $_SESSION['email'];?> ,</h2>
    <?php
    $sql = "SELECT * from Event";
    $result = $conn->query($sql);
    if (($result->num_rows) > 0) {
    while ($row = $result->fetch_assoc()) {
    ?>
    <table align="center" style="width:80%; text-align:center">
        <tr>
            <th>Event Name</th>
            <th>Date</th>
            <th>Event Description</th>
            <th>Location</th>
            <th>Delete</th>
        </tr>
    <tr>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['content']; ?></td>
        <td><?php echo $row['location']; ?></td>
        <td><a href="DeleteEventsAd.php?Ename=<?php echo $row['eid']; ?>"><input type ="Submit" class= "submit_button" type="Submit" value="Delete"/> </td><br/>

    </tr>
    </table>
    <?php
    }
}
?>

    <div style="position: absolute; right: 25%">
        <a href="NewEvent.php"><input class= "submit_button" type="Submit" value="CREATE EVENT "/></a>
        <a href="AdminPage.php"><input class= "submit_button" type="Submit" value="BACK"/></a></br>
    </div>
    </div>
    </div>
</body>
</html>
