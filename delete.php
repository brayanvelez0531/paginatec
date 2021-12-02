<?php
    include('db.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM mantvehiculos WHERE id = $id";
    $result = mysqli_query($conn, $query);

    $_SESSION['message'] = 'Los datos se elmiminaron correctamente.';
    header('location: tecnico.php');
}
?>