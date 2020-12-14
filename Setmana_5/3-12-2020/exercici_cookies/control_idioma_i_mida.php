<?php
if(isset($_GET["idioma"])){
    $idioma = $_GET["idioma"];
    setcookie("idioma",$idioma,time()+(60*60*5));
}else{
    if(isset($_COOKIE["idioma"])){
        $idioma = $_COOKIE["idioma"];
    }else{
        $idioma = "ca";
    }
}
if(isset($_GET["mida"])){
    $mida = $_GET["mida"];
    setcookie("mida",$mida,time()+(60*60*5));
}else{
    if(isset($_COOKIE["mida"])){
        $mida = $_COOKIE["mida"];
    }else{
        $mida = 0;
    }
}

$mides = array(0, 4, 8);
$idiomes = array("ca","es","en"); 
$torrons = array("Torrons","Turrones","Nougats");
$polvorons = array("Polvorons","Polvorones","Shortbread cookies");
$xocolatines = array("Xocolatines","Chocolatinas","Chocolate bars");
$contingut = array(array("Aquí és on van els torrons","Aquí es donde aparecerán los turrones","Here is where the nougats will display"), array("Aquí és on van els polvorons","Aquí es donde aparecerán los polvorones","Here is where the Shortbread cookies will display"), array("Aquí és on van les xocolatines","Aquí es donde aparecerán las chocolatinas","Here is where the chocolate bars will display"));
?>