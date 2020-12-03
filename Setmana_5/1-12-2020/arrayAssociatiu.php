<!DOCTYPE html>
<html>
<head>
    <title>Array associatiu</title>
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
        <h1 class="mt-5 mb-5">Array associatiu</h1>
        <?php $pizza = array("massa" => "fina","salsa" => "tomata"); 
        $pizza["ingredient1"] = "pinya";
        $pizza["ingredient2"] = "frankfurt"; ?>
        <p><?php 
            if(isset($pizza["salsa"])){
                echo $pizza["ingredient1"]." i ".$pizza["salsa"]; 
            }else{
                echo $pizza["ingredient1"]." i ".$pizza["ingredient2"]; 
            }
            ?>
        </p> 
    </div>
    <script>
        $(function(){
            
        });
    </script>
</body>
</html>

