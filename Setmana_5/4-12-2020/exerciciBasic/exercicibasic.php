<?php 
    //crear línies de l'horari
    $dies = array("Dilluns","Dimarts","Dimecres","Dijous","Divendres","Dissabte","Diumenge");
    
    //variables de text segons l'obertura
    $obertura = "";
    $detallsObertura = "<p class='d-none'></p>";

    //variable si és dia de festa
    $comptadorFesta = 0;

    //variables que recuperen dates del servidor
    $hora = date("G");
    $diaSetmana = date("N");
    $any = date("o");
    $diaFesta = date("j-n");
    $minutsObertura = 60-date("i");

    //variables hores d'obriment i tancament
    $hMatiO = 9;
    $hMatiT = 13;
    $hTardaO = 16;
    $hTardaT = 20;

    //variables dies de festa
    $diaOptatiu = "";
    $diaCapAny = "1-1";
    $diaReis = "6-1";
    $diaDivendresSant = "";
    $diaPasquaFlorida = "";
    $diaTreball = "1-5";
    $diaPasquaGranada = "";
    $diaSantJoan = "24-6";
    $diaSantaMaria = "15-8";
    $diaCat = "11-9";
    $diaEsp = "12-10";
    $diaSantNarcis = "29-10";
    $diaTotsSants = "1-11";
    $diaConstitucio = "6-12";
    $diaPurissima = "8-12";
    $diaNadal = "25-12";
    $diaSantEsteve = "26-12";
    
    //variables dies de festa que canvien segons any
    if($any = 2020){
        $diaDivendresSant = "10-4";
        $diaPasquaFlorida = "13-4";
        $diaPasquaGranada = "1-6";
    }elseif($any = 2021){
        $diaDivendresSant = "2-4";
        $diaPasquaFlorida = "5-4";
        $diaOptatiu = "26-7";
    }

    //comprovació de dia festiu
    if($diaFesta == $diaOptatiu || $diaFesta == $diaCapAny || $diaFesta == $diaReis || $diaFesta == $diaDivendresSant || $diaFesta == $diaPasquaFlorida || $diaFesta == $diaTreball || $diaFesta == $diaPasquaGranada || $diaFesta == $diaSantJoan || $diaFesta == $diaSantaMaria || $diaFesta == $diaCat || $diaFesta == $diaEsp || $diaFesta == $diaSantNarcis || $diaFesta == $diaTotsSants || $diaFesta == $diaConstitucio || $diaFesta == $diaPurissima || $diaFesta == $diaNadal || $diaFesta == $diaSantEsteve || $diaSetmana == 7){
        $comptadorFesta = 1;
    }
    
    //comprovació obertura/tancament i minuts que falten per obrir/tancar
    if($hora < $hMatiO || $hora > $hTardaT || ($hora > $hMatiT && $hora < $hTardaO) || $comptadorFesta == 1){ 
        $obertura = "<span class='badge badge-danger mr-3'>Tancat</span>";
        if($comptadorFesta == 0 && ($hora == ($hMatiO-1) || $hora == ($hTardaO-1))){
            $detallsObertura = "<p class='text-danger d-inline-block font-weight-bold'>Falten ".$minutsObertura." min. per obrir</p>";
        }
    }else{
        $obertura = "<span class='badge badge-success mr-3'>Obert</span>";
        if($comptadorFesta == 0 && ($hora == ($hMatiT-1) || $hora == ($hTardaT-1))){
            $detallsObertura = "<p class='text-success d-inline-block font-weight-bold'>Falten ".$minutsObertura." min. per tancar</p>";
        }
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
        :root{
            --vi: #d93a60; 
        }
        iframe{
            width:100%;
            height:300px;
        }
        .col-lg-6>div{
            border:1px solid black;
            padding: 30px;
            margin: 20px 0;
        }
        h3{
            display: inline-block;
            margin-bottom: 40px;
        }
        .badge{
            font-size:20px;
        }
        .tancat{
            color: var(--vi);
        }
        a{
            color: var(--vi);
            font-weight: bold;
        }
        a:hover{
            color: var(--vi);
            font-weight: bold;
            text-decoration: none;
            border-bottom: 1px solid var(--vi);
        }
        h1{
            margin: 100px 0 20px;
        }
        img{
            width:100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ham session</h1>
        <img src="banner.jpg">
        <div class="row">
            <div class="col-lg-6">
                <div>
                    <h3 class="mr-3">Horari</h3>
                  <?php 
                    echo $obertura;
                    echo $detallsObertura; 
                    ?>  
                    <div class="row">
                        <?php
                        //bucle per crear línies dels dies a l'horari
                        for($i = 0; $i < count($dies); $i++){
                            if($dies[$i] != "Diumenge"){ ?>
                                <div class="col-3">
                                    <p><strong><?php echo $dies[$i]; ?></strong></p>
                                </div>
                                <div class="col-4">
                                    <p><strong>Matí</strong> 9:00 a 13:00</p>
                                </div>
                                <div class="col-5">
                                    <p><strong>Tarda</strong> 16:00 a 20:00</p>
                                </div>
                            <?php
                            }else{ ?>
                                <div class="col-3">
                                    <p>Diumenge</p>
                                </div>
                                <div class="col">
                                    <p class="tancat"><strong>Tancat</strong></p>
                                </div>
                            <?php
                            }
                        } ?>
                    </div>
                    <p>Excepte festius. Consulta els festius <a href="https://www.girona.cat/transparencia/cat/festeslocals.php" target="_blank">locals</a> i <a href="https://web.gencat.cat/ca/actualitat/reportatges/calendarilaboral/calendari-laboral-2020/" target="_blank">nacionals</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <h3>Ubicació</h3>
                    <p>Ens pots trobar al Polígon industrial Joeria Sud, 4</p>
                    <p><strong>17150, Sant Gregori</strong></p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2965.4866769400364!2d2.7726209514580025!3d41.989829766290875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12badd8bdbd8c443%3A0x75bcd13968e98aa8!2sHam%20Session%20Sant%20Gregori!5e0!3m2!1sca!2ses!4v1607079266102!5m2!1sca!2ses" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            
        </div>
           
    </div>
    <script>
        $(function(){
        });
    </script>
</body>
</html>
