<?php
include 'connect.php';
include 'TableGateways/UserGateway.php';

use Src\TableGateways\UserGateway;

$UserGateway = new UserGateway($con);

$id = $_GET['updateid'];

$result = $UserGateway->find($id);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$lastname = $row['lastname'];
$email = $row['email'];
$phone = $row['phone'];
$password = $row['password'];


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $inputs = array("name" => $name, "lastname" => $lastname, "email" => $email, "phone" => $phone, "password" => $password);

    $result = $UserGateway->update($id, $inputs);

    if ($result) {
        header('location:index.php');
    } else {
        die(mysqli_error($con));
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User CRUD</title>
</head>

<body>
    <div class="container my-5">

        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" name="name" id="name" autocomplete="off" value="<?php echo $name ?>" />
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" name="lastname" id="lastname" autocomplete="off" value="<?php echo $lastname ?>" />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" autocomplete="off" value="<?php echo $email ?>" />
            </div>
            <div class=" mb-3">
                <label for="phone" class="form-label">Telefone</label>
                <input type="text" class="form-control" name="phone" id="phone" autocomplete="off" value="<?php echo $phone ?>" />
            </div>
            <div class=" mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" autocomplete="off" value="<?php echo $password ?>">
            </div>
            <button type=" submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>


</body>

</html>