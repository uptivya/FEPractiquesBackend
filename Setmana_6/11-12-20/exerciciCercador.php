<?php
    $server = "localhost";
    $username = "root";
    $password = "root";
    $database = "botiga_prova_1";

    $conn = new mysqli($server,$username,$password,$database);

    if($conn->connect_error){
        echo "connexió errònia".mysqli_connect_error();
    }

    $redirect = 0;
    if(isset($_GET["cerca"])){
        $cerca = $_GET["cerca"];
        $redirect = 1;
    }
    if(isset($_GET["selectCategories"])){
        $selectCategories = $_GET["selectCategories"];
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Exercici Cercador</title>
    <meta name="author" content="uptivya">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <style>  
        :root{
            --mostassa: #ffd323;
            --fons: #24221a;
        }
        h1{
            margin:70px 0 40px;
            padding:30px;
            border: 1px solid var(--mostassa);
            display:block;
            width:fit-content
        }
        #botoBuscar{
            margin: 20px 0 10px;
            color:black;
            border-radius: 0;
        }
        input[type="text"],input[type="text"]:focus,input[type="text"]:active,#selectCategories,#selectCategories:focus,#selectCategories:active{
            outline: 0;
            padding: 6px 12px;
            border: 1px solid var(--mostassa);
            margin-right: 30px;
            border-radius: 0;
        }
        input[type="text"]:focus,input[type="text"]:active,#selectCategories:focus,#selectCategories:active{
            box-shadow:none;
        }
        
        input[type="text"]::placeholder{
            color:rgb(207, 207, 207);
        }
        ul{
            padding-inline-start: 20px;
        }
        li{
            margin-bottom: 1rem;
        }
        .targeta{
            margin:0 20px 20px 0;
            padding:30px;
            border: 1px solid var(--mostassa);
        }
        .targeta span{
            font-weight:bold;
            color: var(--mostassa);
            display: inline-block;
        }
        .etiquetaPreu{
            font-weight: bold;
        }
        #targetaNoContent{
            margin:0;
        }
        #contingutResultat{
            padding: 40px 0;
        }
        .clear{
            clear:both;
        }
        .senseStock{
            font-weight: bold;
        }
        p{
            margin-bottom:5px;
        }

        @media (max-width: 991.98px) {
            .targeta{
                margin: 0 auto 20px;
            }
            #contingutResultat h2{
                display: inline-block;
            }
            #contingutResultat p{
                margin-top: 1rem;
                float: right;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cercador de productes</h1>
        <form id="cercador" method="GET" action="exerciciCercador.php">
            <div class="form-row">
                <div class="form-group col-md-7">
                    <label for="nom">Nom del producte</label>
                    <input type="text" class="form-control" placeholder="Escriu..." id="cercador" name="cerca" 
                        <?php if(count($cerca > 0)){?>
                            value="<?php echo $cerca; ?>"
                        <?php
                        } ?>
                    >
                </div>
                <div class="form-group offset-md-1 col-md-4">
                    <label for="selectCategories">Categoria</label>
                    <select name="selectCategories" class="form-control" id="selectCategories">
                        <option value="0" <?php
                            if($selectCategories == 0 || !isset($selectCategories)){?>
                                selected
                            <?php
                            }
                        ?>
                        >Totes les categories</option>
                        <?php 
                            $sql = "SELECT CategoryID, CategoryName FROM categories";

                            $categories = $conn->query($sql);

                            if($categories->num_rows > 0){
                                while($category = $categories->fetch_assoc()){ ?>
                                    <option value="<?php echo $category["CategoryID"]; ?>"<?php
                                        if($selectCategories == $category["CategoryID"]){?>
                                            selected
                                        <?php
                                        }
                                    ?>
                                    ><?php echo $category["CategoryName"]; ?></option>
                                <?php
                                }
                            }
                        ?>
                    </select>
                </div>
            </div>
            <input type="submit" value="Busca" id="botoBuscar" class="btn btn-outline-warning boto">
        </form>
        <div id="contingutResultat">
            <div class="row">
                <?php
                    if($redirect != 0){
                        $sql = "SELECT ProductName, CategoryName, UnitsInStock, UnitPrice, Description FROM products INNER JOIN categories ON products.CategoryID = categories.CategoryID ";

                        //consulta cercador
                        if((count($cerca) > 0) && isset($selectCategories) && $selectCategories > 0){
                            $sql .= "WHERE ProductName LIKE '%".$cerca."%' AND products.CategoryID = '".$selectCategories."'";
                        }elseif((count($cerca) == 0) && isset($selectCategories) && $selectCategories > 0){
                            $sql .= "WHERE products.CategoryID = ".$selectCategories."'";
                        }elseif(count($cerca) > 0 && (!isset($selectCategories) ||(isset($selectCategories) && $selectCategories == 0))){
                            $sql .= "WHERE ProductName LIKE '%".$cerca."%'";
                        }
    
                        $products= $conn->query($sql);
    
                        if($products->num_rows > 0){
                            while($product = $products->fetch_assoc()){?>
                                <div class="col-lg-4">
                                    <div class="targeta">
                                        <h2><?php echo $product["ProductName"] ;?></h2>
                                        <p><span class="mr-3">Categoria</span><?php echo $product["CategoryName"]; ?></p>
                                        <p><span class="mr-3">Descripció</span><?php echo $product["Description"]; ?>.</p>
                                        <p class="etiquetaPreu"><span class="mr-3">Preu/u</span><?php echo round($product["UnitPrice"], 2)."€"; ?>
                                        <?php
                                        if($product["UnitsInStock"] == 0){?>
                                            <p class="senseStock text-danger">No queda stock</p>
                                        <?php
                                        } ?>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            <?php
                            }
                        }else{?>
                            <div class="col-12">
                                <div class="targeta" id="targetaNoContent">
                                    <h2>No hi ha productes amb aquestes especificacions.</h2>
                                </div>
                            </div>
                        <?php
                        }
    
    
                        mysqli_close($conn);  
                    }
                ?>
            </div>
        </div>
    </div>
    <script>
        $(function(){
        });
    </script>
</body>
</html>
