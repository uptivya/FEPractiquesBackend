<?php 
    if(isset($_POST["jugador"])){
        $nomNou = $_POST["jugador"];
        $arxiu = fopen("equip.txt", "w") or die("No s'ha pogut connectar");
        $text = "";
        while(!feof($arxiu)){ 
            $text += fgets($arxiu)."\n";
        }
        $text += $nomNou;
        fwrite($arxiu, $text);
        fclose($arxiu);
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>exercici Equip</title>
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
        <h1>Equip de la Torraja</h1>
        <form method="POST" action="exerciciEquip.php">
            <label for="nom">Nom:</label>
            <input type="text" name="jugador" id="textNom">
            <input type="submit" value="Afegir" id="botoEnviar">
        </form>
        <h1>Equip actual</h1>
        <div id="equipActual">
            <ul>
            <?php
            $arxiu = fopen("equip.txt","r");
            while(!feof($arxiu)){ ?>
              <li><?php echo fgets($arxiu); ?></li>  
            <?php
            }
            fclose($arxiu) ;
            ?>
            </ul>
        </div>   
    </div>
    <script>
        $(function(){
        });
    </script>
</body>
</html>
