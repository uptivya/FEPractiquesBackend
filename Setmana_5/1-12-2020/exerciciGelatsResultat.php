<!DOCTYPE html>
<html>
    <?php  
        $tipusResposta = $_GET["tipus"];
        $midaResposta = $_GET["mida"];
        $gustResposta = $_GET["gust"];
        $toppingResposta = $_GET["topping"];

        $tipus = array("img/cucurutxo.jpg","img/terrina.jpg");
        $gust = array("img/unaBolaMaduixa.jpg","img/unaBolaXocolata.jpg","img/unaBolaVainilla.jpg") ;
        $topping = array("img/sense.jpg","img/crocant.jpg","img/mikado.jpg","img/kiwi.jpg");
        
    ?>
<head>
    <title>Resultat exercici gelats</title>
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
            padding:25px;
            margin-bottom: 20px;
        }
        h1{
            color:white;
            margin-top: 200px;
            font-size: 30pt;
            font-weight: bolder;
        }
        .opcions img{
            width:100%;
        }
        #mida{
            vertical-align: middle;
            text-align: center;
            font-size: 50pt;
            line-height: 275%;
        }
        label{
            color:white;
            text-transform: uppercase;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="col-12" id="container_opcions">
        <h1>Has escollit</h1>
            <div class="row">
                <div class="opcions col-3">
                    <div id="tipus" >
                        <img src="<?php echo $tipus[$tipusResposta]; ?>">
                    </div>
                    <label>Tipus</label><br>
                </div>
                <div class="opcions col-3">
                    <div id="mida">
                        <?php echo ($midaResposta+1); ?>
                    </div> 
                    <label>Número de boles</label><br>
                </div>
                <div class="opcions col-3">
                    <div id="gust">
                        <img src="<?php echo $gust[$gustResposta]; ?>">
                    </div>
                    <label>Gust</label><br>
                </div>
                <div class="opcions col-3">
                    <div id="topping">
                        <img src="<?php echo $topping[$toppingResposta]; ?>">
                    </div>
                    <label>Topping</label><br>
                </div>
            </div>   
        </div>
    </div>
    <script>
        $(function(){
            $(".opcions div").css("height",$(".opcions div").css("width"));
        });
    </script>
</body>
</html>

