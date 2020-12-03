<?php
    session_start();
    $noms = array("Joan","Pere","Maria");
    $contrassenyes = array("abc","abc","as28342w");
    $log = 0;
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
        if(!isset($_SESSION["usuari"])){
            if(isset($_POST["usuari"]) && isset($_POST["contrassenya"])){
                $usuari = $_POST["usuari"];
                $contrassenya = $_POST["contrassenya"];
                for($i = 0; $i < count($noms); $i++){
                    if(($usuari == $noms[$i]) && ($contrassenya == $contrassenyes[$i])){ 
                        $log = 1;
                    }
                } 
                if($log){
                    $_SESSION["usuari"] = $usuari; ?>
                    <div id="navegador">
                        <ul>
                            <li><label>Productes</label></li>
                            <li><a href="clients.php">Clients</a></li>
                            <li><a href="comandes.php">Comandes</a></li>
                            <li id="logout"><a href="usuari.php?action=logout">Logout</a></li>
                        </ul>
                    </div>
                    <div id="contingut">
                        <h1>Productes</h1>
                        <div id="contenidorProductes">
                            <p>On van els productes</p>
                        </div>
                    </div>
                <?php 
                }else{ ?>
                    <p>L'usuari i la contrassenya indicats no concorden. Torna al formulari i repassa les teves dades.</p>
                    <a href="usuari.php">Torna</a>
                <?php 
                } ?>
            <?php 
            }else{ ?>
                <p>No has iniciat sessió. Torna al formulari i inscriu les teves dades.</p>
                <a href="usuari.php">Torna</a>
            <?php 
            } ?>
        <?php 
        }else{ ?>
            <div id="navegador">
                <ul>
                    <li><label>Productes</label></li>
                    <li><a href="clients.php">Clients</a></li>
                    <li><a href="comandes.php">Comandes</a></li>
                    <li id="logout"><a href="usuari.php?action=logout">Logout</a></li>
                </ul>
            </div>
            <div id="contingut">
                <h1>Productes</h1>
                <div id="contenidorProductes">
                    <p>On van els productes</p>
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
