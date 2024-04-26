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