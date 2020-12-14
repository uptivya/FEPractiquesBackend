<?php
    $server = "localhost";
    $username = "root";
    $password = "root";
    $database = "botiga_prova_1";

    $conn = new mysqli($server,$username,$password,$database);

    if($conn->connect_error){
        echo "connexió errònia".mysqli_connect_error();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Connexio BBDD Objectes</title>
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
        <h1>Connectar a BBDD</h1>
        <?php

            //consulta sql
            $sql = "SELECT * FROM employees";

            $employees = $conn->query($sql);

            if($employees->num_rows > 0){
                while($employee = $employees->fetch_assoc()){
                    echo $employee["FirstName"];
                }
                
            }


            mysqli_close($conn);
        ?>
    </div>
    <script>
        $(function(){
        });
    </script>
</body>
</html>
