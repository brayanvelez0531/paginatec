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
  <link rel="stylesheet" href="css/analista.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.bootstrap4.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.bootstrap4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js"></script>
  <title>Plantilla</title>
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


  <!-- MENSAJE DE ORIENTACION -->

  <nav class="navbar navbar-light bg-light">
    <div>
      <h3> Consultas de mantenimiento → </h3>
    </div>
  </nav>

  <div class="container pd-5">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>Fecha</th>
          <th>Vehiculo</th>
          <th>Lugar</th>
          <th>Tipo de Mantenimiento</th>
          <th>Repuesto</th>
          <th>Realiza</th>
        </tr>
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
              </tr>
            <?php   } ?>
          </tbody>
      <tfoot>
        <tr>
          <th>Fecha</th>
          <th>Vehiculo</th>
          <th>Lugar</th>
          <th>Tipo de Mantenimiento</th>
          <th>Repuesto</th>
          <th>Realiza</th>
        </tr>
      </tfoot>
    </table>
  </div>

  <script>
    $(document).ready(function() {
      var table = $('#example').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'colvis']
      });

      table.buttons().container()
        .appendTo('#example_wrapper .col-md-6:eq(0)');
    });
  </script>
</body>

</html>