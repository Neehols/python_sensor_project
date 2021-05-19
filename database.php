<?php
class DB
{
    public function connect()
    {
        $user = "root";
        $pass = "";

        try {
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];
            $db = new PDO('mysql:host=localhost;dbname=tmp', $user, $pass, $options);
            // $db = new PDO('mysql:host=37.97.241.205;dbname=student4a8_523867', $user, $pass, $options);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $db;
    }
}
