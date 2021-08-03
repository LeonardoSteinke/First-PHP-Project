<?php
include 'connect.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from `user` where id =$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Excluido com sucesso";
        header('location:index.php');
    } else {
        die(mysqli_error($con));
    }
}
