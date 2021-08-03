<?php
include 'connect.php';
include 'TableGateways/UserGateway.php';

use Src\TableGateways\UserGateway;

$UserGateway = new UserGateway($con);

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $result = $UserGateway->delete($id);
    if ($result) {
        // echo "Excluido com sucesso";
        header('location:index.php');
    } else {
        die(mysqli_error($con));
    }
}
