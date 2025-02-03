<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sytle.css">
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if(isset($_POST["email"]) && isset($_POST["pass"])){
            $email = $_POST["email"];
            $pass = $_POST["pass"];
        }else{
            echo "Debe introducir el email y la contraseña";
        }
        if(isset($_POST["remember"])){
            $remember = $_POST["remember"];
        }
        if($email == "admin@gmail.com" && $pass == "admin1234!"){
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
</body>
</html>
