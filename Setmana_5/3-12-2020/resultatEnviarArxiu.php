<?php 
    if(!file_exists("fotos")){
		mkdir("fotos");
    }
    $nomarxiu= "fotos/".basename($_FILES["foto"]["name"]);
    if(move_uploaded_file($_FILES["foto"]["tmp_name"],$nomarxiu)){
        echo "Pujat correctament";
        echo "<img src='".$nomarxiu."'>";
	}else{
		echo "No pujat correctament";
    }
    $arxiu = fopen("dades.txt", "w") or die("No s'ha pogut connectar");
    fwrite($arxiu, "Joan\n");
    fwrite($arxiu, "Pere\n");
    fwrite($arxiu, "Anna\n");
    fclose($arxiu);
    echo "Hola";
?>
<!DOCTYPE html>
<html>
<head>
    <title>resultat enviar arxius</title>
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
    </div>
    <script>
        $(function(){
        });
    </script>
</body>
</html>
