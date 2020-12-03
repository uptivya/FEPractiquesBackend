<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>sessions</title>
    <meta name="author" content="uptivya">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <style>  
        #contenidorProductes{
            border:1px solid black;
            padding: 30px;
        }
        #navegador{
            padding: 30px 0;
        }
        #navegador label{
            margin:0;
        }
        #navegador a{
            color: black;
            text-decoration: none;
        }
        #navegador a:hover{
            border-bottom: 2px solid red;
            box-sizing: border-box;
        }
        ul{
            margin:0;
            padding-inline-start: 0;
        }
        li{
            background-color: blanchedalmond;
            list-style: none;
            display: inline-block;
            padding:20px;
        }
        #logout{
            position: relative;
            float: right;
        }
        #navegador{
            width: 100%;
            background-color: blue;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php 
        if(!isset($_SESSION["usuari"])){ ?>
            <p>No has iniciat sessió. Torna al formulari i inscriu les teves dades.</p>
            <a href="usuari.php">Torna</a>
        <?php 
        }else{ ?>
            <div id="navegador">
                <ul>
                    <li><a href="productes.php">Productes</a></li>
                    <li><a href="clients.php">Clients</a></li>
                    <li><label>Comandes</label></li>
                    <li id="logout"><a href="usuari.php?action=logout">Logout</a></li>
                </ul>
            </div>
            <div id="contingut">
                <h1>Comandes</h1>
                <div id="contenidorProductes">
                    <p>On van els comandes</p>
                </div>
            </div>
        <?php 
        } ?>
    </div>
    <script>
        $(function(){
        });
    </script>
</body>
</html>
