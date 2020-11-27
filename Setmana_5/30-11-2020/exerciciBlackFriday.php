<!DOCTYPE html>
<html>
<?php
    $diaSetmana = date("N");
    $diaMes = date("j");
    $mes = date("n");
?>
<head>
    <title>Exercici Black Friday</title>
    <meta name="author" content="uptivya">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <style>  
        img{
            width:100%;
        }
        h1, img, p{
            margin-bottom: 30px;
        }
        .container{
            padding-top:80px;
        }
        body{
            background-color: <?php echo $color; ?>
        }
        #tatxat{
            text-decoration: line-through;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bon dia!</h1>
        <img src="imatges/bondia.jpg">
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
        <label>Per tan sols <strong>
            <?php if($diaSetmana == 5 && $diaMes >= 24 && $mes == 11){ ?>  
                <label id="tatxat">80€</label> 59€
            <?php }else{ ?>
                80€
            <?php } ?>
        </strong></label>     
    </div>

    <script>
        $(function(){
            
        });
    </script>
</body>
</html>

