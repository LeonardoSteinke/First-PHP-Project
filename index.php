<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="user.php" class="text-light">
                Add User
            </a>
        </button>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'connect.php';
                $sql = "Select * from `user`";

                $result = mysqli_query($con, $sql);

                if ($result) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <th >' . $name . '</th>
                        <th >' . $email . '</th>
                        <th >' . $phone . '</th>
                        <th >
                        <button class="btn btn-primary"><a href="update.php?updateid=' . $id . '" class="text-light">Editar</a></button>                        
                        <button class="btn btn-danger"><a href="delete.php?deleteid=' . $id . '" class="text-light" >Excluir</a></button>                        
                        </th>
                        </tr>';
                    }
                } else {
                    die(mysqli_error($con));
                }



                ?>
            </tbody>
        </table>
    </div>

</body>

</html>