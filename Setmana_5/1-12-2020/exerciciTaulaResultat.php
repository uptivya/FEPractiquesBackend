<!DOCTYPE html>
<html>
    <?php  
        if(isset($_POST["numero"])){
            $numero = $_POST["numero"];
        }
    ?>
<head>
    <title>Resultat exercici taula multiplicar</title>
    <meta name="author" content="uptivya">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <style>  
        table{
            text-align: center;
        }
        table td, table th{
            border: 1px solid black;
            padding: 20px 40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table class="mt-5">
            <?php for($i = 0; $i < 10; $i++){ ?>
                <tr>
                    <th><?php echo $numero; ?></th>
                    <td><?php echo ($i+1); ?></td>
                    <th><?php echo $numero*($i+1); ?></th>
                </tr>
            <?php } ?>
        </table>
    </div>
    <script>
        $(function(){
            
        });
    </script>
</body>
</html>

