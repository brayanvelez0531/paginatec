<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>COONATRA MONITOREO</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap"
      rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="img">
        <img src="../img/coonatralogo.jpeg" />
      </div>
      <div class="login-content">
        <form action="../index.php" method="POST">        
            <?php
            
                if (isset($errorLogin)) {
                    echo $errorLogin;
                }
            
            ?>  
          <div>
            <img src="../img/usuario.svg" />
            <h2 class="title">BIENVENIDO</h2>
            <div class="input-div one">
              <div class="i">
                <i class="fas fa-user"></i>
              </div>
              <div class="div">
                <h5>Usuario</h5>
                <input type="text" class="input" name="user"  />
              </div>
            </div>
            <div class="input-div pass">
              <div class="i">
                <i class="fas fa-lock"></i>
              </div>
              <div class="div">
                <h5>Contraseña</h5>
                <input type="password" class="input" name="pass"  />
              </div>
            </div>
            <a href="#" class="">¿Olvidó su contraseña?</a>
            <input type="submit" class="btn" value="Login" name="" />
          </div>
        </form>
      </div>
    </div>
    <script type="text/javascript" src="../js/main.js"></script>
  </body>
</html>
