<?php
require 'bootstrap.php';

$statement = <<<EOS
    INSERT INTO user
        (name, lastname, email, phone, password )
    VALUES
        ('Krasimir', 'Hristozov', 'email1@gmail.com', 1, '1'),
        ('Maria', 'Hristozova', 'email2@gmail.com', 22, '12'),
        ('Masha', 'Hristozova', 'email3@gmail.com', 333, '123'),
        ('Jane', 'Smith', 'email4@gmail.com', 4444, '1234'),
        ('John', 'Smith', 'email5@gmail.com', 55555, '12345'),
        ('Richard', 'Smith', 'email6@gmail.com', 666666, '123456'),
        ('Donna', 'Smith', 'email7@gmail.com', 7777777, '1234566'),
        ('Josh', 'Harrelson', 'email8@gmail.com', 88888888, '12345678'),
        ('Anna', 'Harrelson', 'email9@gmail.com', 999999999, '123456789');
EOS;

try {
    $createTable = $dbConnection->exec($statement);
    echo "Success!\n";
} catch (\PDOException $e) {
    exit($e->getMessage());
}
