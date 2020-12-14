<?php
    session_start();

    $disciplines = array("Atletisme","Natació","Patinatge sobre rodes","Patinatge sobre gel","Escalada");

    if(!isset($_SESSION["nom"])){
        if(isset($_POST["nom"]) && isset($_POST["primerCognom"]) && isset($_POST["segonCognom"]) && isset($_POST["adresa"]) && isset($_POST["telefon"]) && isset($_POST["email"]) && isset($_POST["edat"]) && isset($_POST["disciplina"])){
            if(isset($_POST["nom"])){
                $nom = $_POST["nom"];
            }else{
                $nom = "Nom";
            }
            if(isset($_POST["primerCognom"])){
                $primerCognom = $_POST["primerCognom"];
            }else{
                $primerCognom = "Primer Cognom";
            }
            if(isset($_POST["segonCognom"])){
                $segonCognom = $_POST["segonCognom"];
            }else{
                $segonCognom = "segonCognom";
            }
            if(isset($_POST["adresa"])){
                $adresa = $_POST["adresa"];
            }else{
                $adresa = "Adreça";
            }
            if(isset($_POST["telefon"])){
                $telefon = $_POST["telefon"];
            }else{
                $telefon = "Telèfon";
            }
            if(isset($_POST["email"])){
                $email = $_POST["email"];
            }else{
                $email = "Correu electrònic";
            }
            if(isset($_POST["edat"])){
                $edat = $_POST["edat"];
            }else{
                $edat = "Edat";
            }
            if(isset($_POST["disciplina"])){
                $disciplina = $disciplines[$_POST["disciplina"]-1];
            }else{
                $disciplina = "Disciplina";
            }

            if(!file_exists("fotos")){
                mkdir("fotos");
            }
            $nomarxiu= "fotos/".basename($_FILES["fotografia"]["name"]);
            if(move_uploaded_file($_FILES["fotografia"]["tmp_name"],$nomarxiu)){
            }else{
                ?>
                <script>
                    alert("La fotografia no s'ha pujat correctament. Torna a emplenar el formulari")
                </script>
                <?php
                header("form.php");
            }

            $_SESSION["nom"] = $nom;
            $_SESSION["primerCognom"] = $primerCognom;
            $_SESSION["segonCognom"] = $segonCognom;
            $_SESSION["adresa"] = $adresa;
            $_SESSION["telefon"] = $telefon;
            $_SESSION["email"] = $email;
            $_SESSION["edat"] = $edat;
            $_SESSION["disciplina"] = $disciplina;
            $_SESSION["fotografia"] = $nomarxiu;

        }else{
            header("Location: form.php");
        }
    }else{
        $nom = $_SESSION["nom"];
        $primerCognom = $_SESSION["primerCognom"];
        $segonCognom = $_SESSION["segonCognom"];
        $adresa = $_SESSION["adresa"];
        $telefon = $_SESSION["telefon"];
        $email = $_SESSION["email"];
        $edat = $_SESSION["edat"];
        $disciplina = $_SESSION["disciplina"];
        $nomarxiu = $_SESSION["fotografia"];
    }

    class Esportista{
        public $nom;
        public $primerCognom;
        public $segonCognom;
        public $adresa;
        public $telefon;
        public $email;
        public $edat;
        public $categoria;
        public $disciplina;
        public $nomarxiu;
        
        function __construct($nom,$primerCognom,$segonCognom,$adresa,$telefon,$email,$edat,$disciplina,$nomarxiu){
            $this->nom = $nom;
            $this->primerCognom = $primerCognom;
            $this->segonCognom = $segonCognom;
            $this->adresa = $adresa;
            $this->telefon = $telefon;
            $this->email = $email;
            $this->edat = $edat;
            $this->disciplina = $disciplina;
            $this->nomarxiu = $nomarxiu;

            if($edat == 8 || $edat == 9){
                $this->categoria = "Benjamí";
            }else if($edat == 10 || $edat == 11){
                $this->categoria = "Aleví";
            }else if($edat == 12 || $edat == 13){
                $this->categoria = "Infantil";
            }else if($edat == 14 || $edat == 15){
                $this->categoria = "Cadet";
            }else if($edat == 16 || $edat == 17){
                $this->categoria = "Juvenil";
            }else if($edat >= 18 & $edat <= 21){
                $this->categoria = "Júnior";
            }else if($edat > 21){
                $this->categoria = "Sènior";
            }
            
        }
    }

    $esportista = new Esportista($nom,$primerCognom,$segonCognom,$adresa,$telefon,$email,$edat,$disciplina,$nomarxiu);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Fitxa exercici avansat</title>
    <meta name="author" content="uptivya">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <style>  
        img{
            max-height: 200px;
        }
        td, th{
            padding: 30px 30px 30px 60px;
            border-top: 1px solid white;
            border-bottom: 1px solid white;
        }
        table{
            width: 100%;
            margin-top: 150px;
        }
        #imatge{
            text-align: right;
        }
        strong{
            font-size: 22pt;
        }
        .inline{
            display: inline-block;
            margin-right: 40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table class="table-dark">
            <tr>
                <td colspan="2">
                    <p><strong>Nom complert</strong></p>
                    <p><?php echo $esportista->nom; ?> <?php echo $esportista->primerCognom; ?> <?php echo $esportista->segonCognom; ?></p>
                </td>
                <td id="imatge">
                    <?php echo "<img src='".$esportista->nomarxiu."'>"; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <p><strong class="inline">Adreça</strong> <?php echo $esportista->adresa; ?></p>
                </td>  
            </tr>
            <tr>
                
                <td>
                    <p><strong>Telèfon</strong></p>
                    <p><?php echo $esportista->telefon; ?></p>
                </td>
                <td>
                    <p><strong>Correu electrònic</strong></p>
                    <p><?php echo $esportista->email; ?></p>
                </td>
                <td>
                    <p><strong>Edat</strong></p>
                    <p><?php echo $esportista->edat; ?> anys</p>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <p><strong class="inline">Disciplina</strong> <?php echo $esportista->disciplina; ?></p>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <p><strong class="inline">Categoria</strong> <?php echo $esportista->categoria; ?></p>
                </td>
            </tr>
            
        </table>
    </div>
    <script>
        $(function(){

        });
    </script>
</body>
</html>
