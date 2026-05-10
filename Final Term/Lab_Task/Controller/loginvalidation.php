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

        // Signin Check
        $result = $database->signin(
            $connection,
            "users",
            $name,
            $password
        );

        // Login Success
        if($result->num_rows > 0)
        {
            $_SESSION["UserName"] = $name;

            setcookie(
                "UserName",
                $name,
                time()+3600,
                "/"
            );

            echo "Login Successful";

        
        }
        else
        {
            echo "Invalid User Name or Password";
        }

    }
    else
    {
        echo "Please Use Appropriate Validation";
    }
}

?>