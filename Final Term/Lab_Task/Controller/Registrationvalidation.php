<?php

include "../Model/db.php";

session_start();

$name = "";
$password = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $password = $_POST["password"];

    // Validation
    if(!empty($name) && strlen($name) >= 5
    && strlen($password) >= 4)
    {

        // Database Object
        $database = new db();

        // Database Connection
        $connection = $database->connection();

        // Insert Data
        $result = $database->signup(
            $connection,
            "users",
            $name,
            $password
        );

        // Registration Success
        if($result)
        {
            $_SESSION["UserName"] = $name;

            setcookie(
                "UserName",
                $name,
                time()+3600,
                "/"
            );

            echo "Registration Successful";

            header("Location: ../View/Login.php");
        }
        else
        {
            echo "Registration Failed";
        }

    }
    else
    {
        echo "Please Use Appropriate Validation";
    }
}

?>