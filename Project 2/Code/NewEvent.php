<?php
 include('Authentication.php');
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="gb18030">
  <link rel="stylesheet" href="./ciudad.css">
    
    <title>New Event</title>
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
      <p style="font-size: 32px">CREATE EVENT</p>
      <p>ADMIN LOGIN > CREATE EVENT</p>
    </div>
  </div>
  <div class="register">
    <p style="font-size: 32px; text-align: center">Add New <span style="color: orange"><i>Event</i></span></p>
    <div class="row">
      <div class="column1_reg">
        <p>Nombre del evento: </p>
        <p><br/>Sitio: </p>
        <p><br/>Fecha: </p>
        <p><br/>Hora: </p>
        <p><br/>Descripción del evento: </p>

      </div>
      <div class="column2_reg">
        <form action="Eventreg.php" method="post">
          <input name="Eventname" type="text"  size="45" style="height: 35px"/> <br /><br/>
          <input  name="Place" type="text"  size="45" style="height: 35px" /> <br /><br/>
          <input type="date" name="Date" style="height: 35px"> <br /><br/>
          <input  name="time" type="time" size="45" style="height: 35px" /> <br /><br/>
          <input type="text" name="description" style="height: 105px" size="45"><br/><br/>
          <input class= "submit_button" type="Submit" value="REGISTRATE"/>
        </form>

      </div>
    </div>
  </div>
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

</body>
</html>
