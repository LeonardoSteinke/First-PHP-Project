<?php

namespace Src\TableGateways;

include 'connect.php';


class UserGateway
{

    private $con = null;

    public function __construct($con)
    {
        $this->con = $con;
    }

    public function findAll()
    {
        $sql = "
            SELECT *
              FROM user;
        ";

        try {
            $result = mysqli_query($this->con, $sql);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function find($id)
    {
        $sql = "
            SELECT *                
              FROM user
             WHERE id = $id;
        ";

        try {
            $result = mysqli_query($this->con, $sql);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function insert(array $input)
    {
        $sql = "
            INSERT 
              INTO user 
                   (name, lastname, email, phone, password)
            VALUES (
                '" . $input['name'] . "', 
                '" . $input['lastname'] . "', 
                '" . $input['email'] . "' , 
                '" . $input['phone'] . "', 
                '" . $input['password'] . "');
        ";

        try {
            $result = mysqli_query($this->con, $sql);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function update($id, array $input)
    {
        $sql = "
            UPDATE user
               SET name = '" . $input['name'] . "',
                   lastname  = '" . $input['lastname'] . "',
                   email = '" . $input['email'] . "',
                   phone = '" . $input['phone'] . "',
                   password = '" . $input['password'] . "'
             WHERE id = $id;
        ";

        try {
            $result = mysqli_query($this->con, $sql);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function delete($id)
    {
        $sql = "
            DELETE FROM user
            WHERE id = $id;
        ";

        try {
            $result = mysqli_query($this->con, $sql);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}
