<?php include('db.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../paginatec/css/analista.css">
  <title>Plantilla</title>
</head>

<body>
  <header>
    <!-- PENDIENTE MENU BURGER -->

    <ul class="d-flex bg-white justify-content-evenly align-items-center flex-wrap">
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="img/banner.PNG" alt="" /></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../paginatec/home.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../paginatec/tecnico.php">Registro de Mantenimiento</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../paginatec/analista.php">Informacion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../paginatec/index.html">Cerrar Sesion</a>
      </li>
    </ul>
  </header>

  <!-- mensaje de bienvenida -->

  <div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>BIENVENIDO!</strong> En esta pestaña podras almacenar la informacion de los mantenimientos.
  </div>

  <!-- inicio del crud consulta -->

  <nav class="navbar navbar-dark bg-danger">
    <div class="container">
      <h5 style="color: azure;">Ingreso de informacion de los registros de Mantenimiento.</h5>
    </div>
  </nav>

  <main class="container p-4">
    <div class="row">
      <div class="col-md-4">
        <!-- mensaje de alerta -->
        <?php if (isset($_SESSION['message'])) { ?>

          <div class="alter aler-warning alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
          </div>
          <!-- refresca la pagina cuando cierra el mensaje -->
        <?php session_unset();
        } ?>

        <div class="card card-body">
          <form action="save.php" method="POST">
            <div class="form-group">
              <p>
                <input type="date" name="fecha" class="form-control" placeholder="Fecha" autofocus>
              </p>
              <p>
                <input type="text" name="vehiculo" class="form-control" placeholder="Vehiculo" autofocus>
              </p>
              <p>
                <input type="text" name="lugar" class="form-control" placeholder="Lugar" autofocus>
              </p>
              <p>
                <input type="text" name="tipomantenimiento" class="form-control" placeholder="Tipo mantenimiento" autofocus>
              </p>
              <p>
                <input type="text" name="repuesto" class="form-control" placeholder="Repuesto" autofocus>
              </p>
              <p>
                <input type="text" name="realiza" class="form-control" placeholder="Realiza" autofocus>
              </p>
            </div>
            <input type="submit" class="byon btn-success btn block" name="save" value="Enviar">
          </form>
        </div>
      </div>

      <div class="col-md-8">
        <table class="table table-border">
          <thead>
            <th>Fecha</th>
            <th>Vehiculo</th>
            <th>Lugar</th>
            <th>Tipo Mantenimiento</th>
            <th>Repuesto</th>
            <th>Realiza</th>
          </thead>
          <tbody>
            <?php
            $query = "SELECT * FROM mantvehiculos";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) { ?>

              <tr>
                <td>
                  <?php echo $row['fecha']; ?>
                </td>
                <td>
                  <?php echo $row['vehiculo']; ?>
                </td>
                <td>
                  <?php echo $row['lugar']; ?>
                </td>
                <td>
                  <?php echo $row['tipomantenimiento']; ?>
                </td>
                <td>
                  <?php echo $row['repuesto']; ?>
                </td>
                <td>
                  <?php echo $row['realiza']; ?>
                </td>
                <td>
                  <a href="edit.php?id=<?php echo $row['id'] ?>"> Editar</a>
                  <a href="delete.php?id=<?php echo $row['id'] ?>"> Eliminar</a>
                </td>
              </tr>
            <?php   } ?>
          </tbody>

        </table>
      </div>
    </div>
  </main>

  <!-- script -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rLQihCFPSNPkwLNBTbVZHUAnYc5iRYaWz9em+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3-1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoII60rQ6VrjIEaFf/nJGzIxfDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</body>

</html>