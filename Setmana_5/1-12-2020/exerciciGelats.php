<!DOCTYPE html>
<html>
<head>
    <title>Exercici gelats</title>
    <meta name="author" content="uptivya">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <style>  
        *{
            font-family: "Futura", sans-serif;
            font-weight: bold;
        }
        body {
            background-color: salmon;
        }
        .opcions{
            padding:10px;
            margin-top: 35px;
            font-family: 'Times New Roman', Times, serif;
        }
        .opcions div{
            border-radius: 0;
            border:10px solid white;
            background-color: salmon;
            color:white;
            height:237.5px;
            padding:25px;
            margin-bottom: 47.5px;
        }
        h1{
            color:white;
            margin-top: 200px;
            font-size: 30pt;
            font-weight: bolder;
        }
        #botoEnviar{
            color:white;
            margin:25px 20px 0 10px;
            padding: 10px 10px;
            border:none ;
            border:10px solid white;
            background-color: salmon;
            transition: 3s ease;
            font-size: 20px;
            font-weight: 900;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <form method="GET" action="exerciciGelatsResultat.php">
            <div class="col-12" id="container_opcions">
            <h1>ESCULL EL TEU GELAT</h1>
                <div class="row">
                    <div class="opcions col-3">
                        <div>
                            <label for="tipus" class="mt-5">Tipus: </label><br>
                            <select class="desplegable" name="tipus" id="tipus">
                                <option selected value="0">Cucurutxo</option>
                                <option value="1">Terrina</option>
                            </select>
                        </div>
                    </div>
                    <div class="opcions col-3">
                        <div>
                          <label for="mida" class="mt-5">Número de boles: </label><br>
                            <select class="desplegable" name="mida" id="mida">
                                <option selected value="0">1</option>
                                <option value="1">2</option>
                                <option value="2">3</option>
                            </select>
                        </div> 
                    </div>
                    <div class="opcions col-3">
                        <div>
                            <label for="gust" class="mt-5">Gust: </label><br>
                            <select class="desplegable" name="gust" id="gust">
                                <option selected value="0">Maduixa</option>
                                <option value="1">Xocolata</option>
                                <option value="2">Vainilla</option>
                            </select>
                        </div>
                    </div>
                    <div class="opcions col-3">
                        <div>
                            <label for="topping" class="mt-5">Topping: </label><br>
                            <select class="desplegable" name="topping" id="topping">
                                <option selected value="0">Cap</option>
                                <option value="1">Crocant</option>
                                <option value="2">Mikado</option>
                                <option value="3">Kiwi</option>
                            </select>
                        </div>
                    </div>
                </div>   
            </div>
            <input type="submit" value="Enviar" id="botoEnviar" class="mt-2" formtarget="_blank">
        </form>
    </div>
    <script>
        $(function(){
            
        });
    </script>
</body>
</html>

