<?php
    session_start();
    if($_GET["action"] == "logout"){
        session_unset();
    }
    if(isset($_SESSION["usuari"])){
        header("Location: productes.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>sessions</title>
    <meta name="author" content="uptivya">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <style>  

    </style>
</head>
<body>
    <div class="container">
        <form method="POST" action="productes.php">
            <label for="textUsuari">Usuari: </label>
            <input type="text" name="usuari" id="textUsuari"><br>
            <label for="textContrassenya">Contrassenya: </label>
            <input type="password" name="contrassenya" id="textContrassenya"><br>
            <input type="submit" value="Login" class="btn btn-outline-warning" id="botoEnviar">
        </form>
    </div>
    <script>
        $(function(){
        });
    </script>
</body>
</html>
