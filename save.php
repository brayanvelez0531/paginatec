<?php
    include("db.php");

    if(isset($_POST['save'])) {

       $fecha= $_POST['fecha'];
       $vehiculo= $_POST['vehiculo'];
       $lugar= $_POST['lugar'];
       $tipomantenimiento= $_POST['tipomantenimiento'];
       $repuesto= $_POST['repuesto'];
       $realiza= $_POST['realiza'];
        
        $query="INSERT INTO mantvehiculos(fecha, vehiculo, lugar, tipomantenimiento, repuesto, realiza) VALUES ('$fecha', '$vehiculo', '$lugar', '$tipomantenimiento', '$repuesto', '$realiza')";
        
        $result=mysqli_query($conn, $query);

        $_SESSION['message'] = "Guardado Con exito.";
        header("location: tecnico.php");
    }
?>