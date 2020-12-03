<!DOCTYPE html>
<html>
<head>
    <title>Exercici taula multiplicar</title>
    <meta name="author" content="uptivya">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <style>  
        input[type="number"],input[type="number"]:focus,input[type="number"]:active{
            box-shadow: 0;
            outline:0;
            padding:10px;
            border-radius: 0;
            border: 1px solid #fcba03;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="POST" action="exerciciTaulaResultat.php">
            <label for="numero" class="mt-5">Número del que vols fer la taula de multiplicar: </label>
            <input type="number" placeholder="Número" id="numero" name="numero" class="ml-3"><br>
            <input type="submit" value="Enviar" id="botoEnviar" class="btn btn-outline-warning mt-2">
        </form>
    </div>
    <script>
        $(function(){
            
        });
    </script>
</body>
</html>

