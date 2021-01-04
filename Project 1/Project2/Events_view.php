<?php
    include('Connection.php');
    include('Authentication.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EVENTS</title>
    <link rel="stylesheet" href="./ciudad.css">
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
            <p style="font-size: 32px">EVENTS</p>
            <p>INICIO > EVENTS</p>
        </div>
    </div>

  <?php
    $mail = $_SESSION['email'];
    $sql = "SELECT * from Event WHERE eid in (SELECT eid FROM EventReg WHERE uemail = '$mail')";
    $result = $conn->query($sql);
    if (($result->num_rows) > 0) {
    while ($row = $result->fetch_assoc()) {
    ?>
    <table style="width:100%">
    <tr>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['content']; ?></td>
        <td><?php echo $row['location']; ?></td>
        <td><a href="Deregister.php?Ename=<?php echo $row['eid']; ?>"><input type ="Submit" class= "submit_button" type="Submit" value="Delete"/> </td>
    </tr>
    </table>
    <?php
    }
}
?>
    //All events displayed

    <div class="event_button">
        <a href="User_dash.php"><input class= "submit_button" type="Submit" value="Back "/></a></br>
    </div>
    <div class = "Text1">
        <div class = "Footer">
            <div class = "Footer-Text">
                <h2>Escribenos, te invitamos a brindar lo mejor de ti para el bien<br/>comun,<span style="color: orange"> queremos conocer acerca de tus ideas para mejorar.</span></h2>
            </div>
        </div>
        <div class="Footer2">
            <div class="Footer-logo">
                <a href="mailto:admin@genteyciudad.com"> <img height="40px" width="40px" src="./img/email-wb.PNG"></a> &emsp;<a href="www.twitter.com/genteyciudadorg"><img width="40px" height="40px" src="./img/twitter-wb.PNG"></a>&emsp;<a href="www.instagram.com/genteyciudadorg"><img height="40px" width="40px" src="./img/instagram_wb.PNG"></a>

            </div>
            <div class="Footer-Text2">
                <p><span style="color: orange"> DiazApps</span><span style="color:gray"> &copy; 2020 All Right Reserved</span></p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
