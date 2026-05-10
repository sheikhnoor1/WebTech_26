<?php 
include"../Controller/Registrationvalidation";
?>
<!DOCTYPE html>
<html>
    <body>
        <form method='post' action="../Controller/Registrationvalidation.php">
            <table>
                <tr>
                    <td><lable for ="Username">User Name:</td>
                    <td> <input type="text" id="name" name="name"> <?php echo $name ?> </td>
                </tr>
                <tr>
                    <td><lable for="password">Password:</td>
                    <td> <input type="password" id="password" name="password"> <?php echo $password ?>
                </tr>
                <tr>
                    <td> <input type="submit" id="submitbutton" name="submit"> </td>
                </tr>
            </table>
        </form>
    </body>
</html>