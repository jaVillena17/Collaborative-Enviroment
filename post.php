<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $remember = $_POST["remember"];

        if($email == "admin@gmail.com", $pass == "admin"){
            echo "<h2>Bienvenido, sus datos son los siguientes:</h2>";
            echo "<br>Correo electrónico: " . $email;
            echo "<br>Su contraseña: " . $pass;
            echo "<br>Remember: " . $remember;
        }else{
            echo "El usuario que ha introducido es incorrecto<br><br>";
            echo "<a href='index.html'><button>Vover al inicio</button></a>";

        }
    }

?>