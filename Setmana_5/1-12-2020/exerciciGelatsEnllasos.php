<!DOCTYPE html>
<html>
<head>
    <title>Exercici gelats</title>
    <meta name="author" content="uptivya">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet"> 
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
            padding:25px;
            margin-top: 35px;
            font-family: 'Times New Roman', Times, serif;
            margin-bottom: 47.5px;
            color:white;
        }
        h1{
            color:white;
            margin-top: 200px;
            font-size: 30pt;
            font-weight: bolder;
        }
        h2{
            font-weight: bolder;
        }
        #botoEnviar{
            color:white;
            margin:25px 20px 0 10px;
            padding: 10px 10px;
            border:none ;
            border:10px solid white;

            background-color: salmon;
            /*box-shadow: 5px 5px 5px rgb(187, 95, 84), -3px -3px 7px rgb(255, 170, 161);*/
            transition: 3s ease;
            font-size: 20px;
            font-weight: 900;
            text-align: left;
        }
        .opcions .col-6 div{
            padding:20px;
            border:2px solid white;
            margin-bottom:30px;
        }
        .opcions .col-6 div a{
            color:white;
            font-family: 'Major Mono Display', monospace;
            font-weight: lighter;
            border-bottom: 2px solid white;
            display: inline-block;
            line-height: 1.5;
            margin: 0 5px 5px 0;
        }
        .opcions .col-6 div a:hover{
            cursor:pointer;
            border-color: red;
            text-decoration: none;
        }
        
        

    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="col-12" id="container_opcions">
            <h1>ESCULL EL TEU GELAT</h1>
            <div class="row">
                <div class="opcions col-4">
                    <h2>Maduixa: </h2><br>
                    <div class="row">
                        <div class="col-6">
                            <div>
                                <label class="sl1">- Cucurutxo:</label><br>
                                <label class="sl2">--- 1 Bola</label><br>
                                <label class="sl3">----- Topping</label><br>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=0&gust=0&topping=0" target="_blank">x</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=0&gust=0&topping=1" target="_blank">crocant</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=0&gust=0&topping=2" target="_blank">mikado</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=0&gust=0&topping=3" target="_blank">kiwi</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label class="sl1">- Cucurutxo:</label><br>
                                <label class="sl2">--- 2 Boles</label><br>
                                <label class="sl3">----- Topping</label><br>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=1&gust=0&topping=0" target="_blank">x</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=1&gust=0&topping=1" target="_blank">crocant</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=1&gust=0&topping=2" target="_blank">mikado</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=1&gust=0&topping=3" target="_blank">kiwi</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label class="sl1">- Cucurutxo:</label><br>
                                <label class="sl2">--- 3 Boles</label><br>
                                <label class="sl3">----- Topping</label><br>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=2&gust=0&topping=0" target="_blank">x</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=2&gust=0&topping=1" target="_blank">crocant</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=2&gust=0&topping=2" target="_blank">mikado</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=2&gust=0&topping=3" target="_blank">kiwi</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label class="sl1">- Terrina:</label><br>
                                <label class="sl2">--- 1 Bola</label><br>
                                <label class="sl3">----- Topping</label><br>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=0&gust=0&topping=0" target="_blank">x</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=0&gust=0&topping=1" target="_blank">crocant</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=0&gust=0&topping=2" target="_blank">mikado</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=0&gust=0&topping=3" target="_blank">kiwi</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label class="sl1">- Terrina:</label><br>
                                <label class="sl2">--- 2 Boles</label><br>
                                <label class="sl3">----- Topping</label><br>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=1&gust=0&topping=0" target="_blank">x</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=1&gust=0&topping=1" target="_blank">crocant</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=1&gust=0&topping=2" target="_blank">mikado</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=1&gust=0&topping=3" target="_blank">kiwi</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label class="sl1">- Terrina:</label><br>
                                <label class="sl2">--- 3 Boles</label><br>
                                <label class="sl3">----- Topping</label><br>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=2&gust=0&topping=0" target="_blank">x</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=2&gust=0&topping=1" target="_blank">crocant</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=2&gust=0&topping=2" target="_blank">mikado</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=2&gust=0&topping=3" target="_blank">kiwi</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="opcions col-4">
                    <h2>Xocolata: </h2><br>
                    <div class="row">
                        <div class="col-6">
                            <div>
                                <label class="sl1">- Cucurutxo:</label><br>
                                <label class="sl2">--- 1 Bola</label><br>
                                <label class="sl3">----- Topping</label><br>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=0&gust=1&topping=0" target="_blank">x</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=0&gust=1&topping=1" target="_blank">crocant</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=0&gust=1&topping=2" target="_blank">mikado</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=0&gust=1&topping=3" target="_blank">kiwi</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label class="sl1">- Cucurutxo:</label><br>
                                <label class="sl2">--- 2 Boles</label><br>
                                <label class="sl3">----- Topping</label><br>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=1&gust=1&topping=0" target="_blank">x</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=1&gust=1&topping=1" target="_blank">crocant</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=1&gust=1&topping=2" target="_blank">mikado</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=1&gust=1&topping=3" target="_blank">kiwi</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label class="sl1">- Cucurutxo:</label><br>
                                <label class="sl2">--- 3 Boles</label><br>
                                <label class="sl3">----- Topping</label><br>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=2&gust=1&topping=0" target="_blank">x</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=2&gust=1&topping=1" target="_blank">crocant</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=2&gust=1&topping=2" target="_blank">mikado</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=2&gust=1&topping=3" target="_blank">kiwi</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label class="sl1">- Terrina:</label><br>
                                <label class="sl2">--- 1 Bola</label><br>
                                <label class="sl3">----- Topping</label><br>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=0&gust=1&topping=0" target="_blank">x</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=0&gust=1&topping=1" target="_blank">crocant</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=0&gust=1&topping=2" target="_blank">mikado</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=0&gust=1&topping=3" target="_blank">kiwi</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label class="sl1">- Terrina:</label><br>
                                <label class="sl2">--- 2 Boles</label><br>
                                <label class="sl3">----- Topping</label><br>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=1&gust=1&topping=0" target="_blank">x</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=1&gust=1&topping=1" target="_blank">crocant</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=1&gust=1&topping=2" target="_blank">mikado</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=1&gust=1&topping=3" target="_blank">kiwi</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label class="sl1">- Terrina:</label><br>
                                <label class="sl2">--- 3 Boles</label><br>
                                <label class="sl3">----- Topping</label><br>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=2&gust=1&topping=0" target="_blank">x</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=2&gust=1&topping=1" target="_blank">crocant</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=2&gust=1&topping=2" target="_blank">mikado</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=2&gust=1&topping=3" target="_blank">kiwi</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="opcions col-4">
                    <h2>Xocolata: </h2><br>
                    <div class="row">
                        <div class="col-6">
                            <div>
                                <label class="sl1">- Cucurutxo:</label><br>
                                <label class="sl2">--- 1 Bola</label><br>
                                <label class="sl3">----- Topping</label><br>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=0&gust=2&topping=0" target="_blank">x</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=0&gust=2&topping=1" target="_blank">crocant</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=0&gust=2&topping=2" target="_blank">mikado</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=0&gust=2&topping=3" target="_blank">kiwi</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label class="sl1">- Cucurutxo:</label><br>
                                <label class="sl2">--- 2 Boles</label><br>
                                <label class="sl3">----- Topping</label><br>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=1&gust=2&topping=0" target="_blank">x</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=1&gust=2&topping=1" target="_blank">crocant</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=1&gust=2&topping=2" target="_blank">mikado</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=1&gust=2&topping=3" target="_blank">kiwi</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label class="sl1">- Cucurutxo:</label><br>
                                <label class="sl2">--- 3 Boles</label><br>
                                <label class="sl3">----- Topping</label><br>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=2&gust=2&topping=0" target="_blank">x</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=2&gust=2&topping=1" target="_blank">crocant</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=2&gust=2&topping=2" target="_blank">mikado</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=0&mida=2&gust=2&topping=3" target="_blank">kiwi</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label class="sl1">- Terrina:</label><br>
                                <label class="sl2">--- 1 Bola</label><br>
                                <label class="sl3">----- Topping</label><br>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=0&gust=2&topping=0" target="_blank">x</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=0&gust=2&topping=1" target="_blank">crocant</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=0&gust=2&topping=2" target="_blank">mikado</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=0&gust=2&topping=3" target="_blank">kiwi</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label class="sl1">- Terrina:</label><br>
                                <label class="sl2">--- 2 Boles</label><br>
                                <label class="sl3">----- Topping</label><br>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=1&gust=2&topping=0" target="_blank">x</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=1&gust=2&topping=1" target="_blank">crocant</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=1&gust=2&topping=2" target="_blank">mikado</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=1&gust=2&topping=3" target="_blank">kiwi</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label class="sl1">- Terrina:</label><br>
                                <label class="sl2">--- 3 Boles</label><br>
                                <label class="sl3">----- Topping</label><br>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=2&gust=2&topping=0" target="_blank">x</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=2&gust=2&topping=1" target="_blank">crocant</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=2&gust=2&topping=2" target="_blank">mikado</a>
                                <a href="http://localhost:8888/FEPractiquesBackend/Setmana_5/1-12-2020/exerciciGelatsResultat.php?tipus=1&mida=2&gust=2&topping=3" target="_blank">kiwi</a>
                            </div>
                        </div>
                        
                    </div>
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

