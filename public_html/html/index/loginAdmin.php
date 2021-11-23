<!-- 
* Copyright 2016 Carlos Eduardo Alfaro Orellana
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio de sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="admin/assets/icons/book.ico" />
    <script src="admin/admin/js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="admin/css/sweet-alert.css">
    <link rel="stylesheet" href="admin/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="admin/css/normalize.css">
    <link rel="stylesheet" href="admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="admin/css/style.css">
    <link rel="stylesheet" href="admin/css/login.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="admin/js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="admin/js/modernizr.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="admin/js/main.js"></script>
</head>
<body class="full-cover-background" style="background-image:url(assets/img/fondoCevicheria.jpg);">
    <div class="form-container">

        <div id="_AJAX_LOGIN_">

        </div>    
        <p class="text-center" style="margin-top: 17px;">
           <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
       </p>
       <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicia sesión con tu cuenta</h4>
       <form>
            <div class="group-material-login">
              <input type="text" class="material-login-control" id="user_login" required="" maxlength="70">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; DNI</label>
            </div><br>
            <div class="group-material-login">
              <input type="password" class="material-login-control" id="pass_login" required="" maxlength="70">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
            </div>
            <button class="btn-login" type="submit" onclick="goLoginAdmin()">Ingresar al sistema &nbsp; <i class="zmdi zmdi-arrow-right"></i></button>
        </form>
    </div>  
    <script src="views/app/js/loginAdmin.js"></script>
</body>
</html>