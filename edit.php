<?php

include("db.php");
$fecha = '';
$vehiculo = '';
$lugar = '';
$tipomantenimiento = '';
$repuesto = '';
$realiza = '';

// REALIZA LA CONSULTA A LA BD

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $query = "SELECT * FROM mantvehiculos WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $fecha = $row['fecha'];
        $vehiculo = $row['vehiculo'];
        $lugar = $row['lugar'];
        $tipomantenimiento = $row['tipomantenimiento'];
        $repuesto = $row['repuesto'];
        $realiza = $row['realiza'];
    }
}

//REALIZA LA ACTUALIZACION

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $fecha = $_POST['fecha'];
    $vehiculo = $_POST['vehiculo'];
    $lugar = $_POST['lugar'];
    $tipomantenimiento = $_POST['tipomantenimiento'];
    $repuesto = $_POST['repuesto'];
    $realiza = $_POST['realiza'];

    $query = "UPDATE mantvehiculos set fecha = '$fecha', vehiculo = '$vehiculo', lugar = '$lugar', tipomantenimiento = '$tipomantenimiento', repuesto = '$repuesto', realiza = '$realiza' WHERE id=$id";
    mysqli_query($conn, $query);

    $_SESSION['message'] = "Actualizado Con exito.";
    header("location: tecnico.php");
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Tecnico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../paginatec/css/analista.css">
</head>

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
<body>

    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
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
                      <button class="btn-success" name="update">
                        Actualizar
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>