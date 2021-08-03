<?php
include 'connect.php';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];

  $sql = "insert into `user` (name, email, phone, password) values ('$name', '$email', '$phone', '$password')";
  $result = mysqli_query($con, $sql);

  if ($result) {
    echo 'deu boa';
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
        <input type="text" class="form-control" name="name" id="name" autocomplete="off" />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" name="email" id="email" autocomplete="off" />
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Telefone</label>
        <input type="text" class="form-control" name="phone" id="phone" autocomplete="off" />
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" autocomplete="off">
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>


</body>

</html>