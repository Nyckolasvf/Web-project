<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOIN US</title>
</head>
<body>
    <style type="text/css">
        body {
            background-image: url(https://wallpapercave.com/wp/wp5783081.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        form {
            color: azure;
        }
    </style>
    <div class="login_screen";>
        <form class="login" action="Index.php" method="POST">
            Nick: <input type="text" name="login_name"><br>
            Password: <input type="text" name="login_password"><br>
            <input type="submit">
        </form>
    </div>
    <?php
        try{
            $login_name = $_POST["login_name"];
            $login_password = $_POST["login_password"];
            $admin = "admin";

            if ('REQUEST_METHOD' == 'POST'){
                if ($login_name && $login_password == $admin){
                    header("Location: /PHP_2024_(01)/A06_Types/afterlogin.php");
                    die();
                }
                else if ($login_name != $admin || $login_password != $admin){
                    echo "<p class='error'>Usuário ou senha incorretos</p>";
                }
                else{
                    echo " ";
                } 
            }
        }catch(Exception $e){
            echo" ";
        }
    ?>
</body>
</html>