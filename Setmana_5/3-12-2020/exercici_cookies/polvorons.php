<?php
    include("control_idioma_i_mida.php");
    $pagina = "polvorons";
?>
<!DOCTYPE html>
<html>
<head>
    <title>torrons</title>
    <meta name="author" content="uptivya">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <style>  
        .disabled{
            border-bottom: 3px solid black;
        }
        #contingutProducte{
            border:1px solid black;
            padding:30px;
        }
        a{
            font-size: calc(16px + <?php echo $mida; ?>px);
        }
        h1{
            font-size: calc(40px + <?php echo $mida; ?>px);
        }
        h2{
            font-size: calc(32px + <?php echo $mida; ?>px);
        }
        #mida1{
            font-size: 16px;
        }
        #mida2{
            font-size: 20px;
        }
        #mida3{
            font-size: 24px;
        }
        
    </style>
</head>
<body>
    <?php include("control_contingut.php"); ?>
    <div class="container">
        <h1><?php echo $polvorons[$i] ?></h1>
        <div id=contingutProducte>
            <h2><?php echo $contingut[1][$i] ?></h2>
        </div>
    </div>
    <script>
        $(function(){
        });
    </script>
</body>
</html>
