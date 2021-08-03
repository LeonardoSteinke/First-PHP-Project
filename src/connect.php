<?php

$con = new mysqli('localhost', 'root', '', 'primeirocrud');

if (!$con) {
    die(mysqli_error($con));
}
