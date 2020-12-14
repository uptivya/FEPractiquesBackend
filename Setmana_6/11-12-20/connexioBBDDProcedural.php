<?php
    $server = "localhost";
    $username = "root";
    $password = "root";
    $database = "botiga_prova_1";

    $conn = mysqli_connect($server,$username,$password,$database);

    if(!$conn){
        echo "Connexió errònia. ".mysqli_connect_error(); 
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Connexio BBDD Procedural</title>
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
            //consulta sql països
            $sql = "SELECT DISTINCT(Country) FROM customers ORDER BY Country";
            $countries = mysqli_query($conn,$sql);

            if(mysqli_num_rows($countries)>0){
                while($country = mysqli_fetch_assoc($countries)){?>
                    <a href="connexioBBDDProcedural.php?country=<?php echo $country["Country"];?>"><?php echo $country["Country"];?></a>
                    <br>
                <?php    
                }
            }

            //consulta sql gent
            if(isset($_GET["country"])){
                $country = $_GET["country"];
                $sql = "SELECT * FROM customers WHERE Country='".$country."'";
            }else{
                $sql = "SELECT * FROM customers";
            }

            $customers = mysqli_query($conn,$sql);

            if(mysqli_num_rows($customers)>0){
                while($customer = mysqli_fetch_assoc($customers)){
                    echo $customer["ContactName"];
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
