<!DOCTYPE html>
<html>
<?php
    $diaSetmana = date("N");
    $diaMes = date("j");
    $mes = date("n");
?>
<head>
    <title>Bucles</title>
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
        table th, table td{
            padding:20px 40px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-5">Taula del 5</h1>
        <table>
            <?php for($i = 0; $i < 10; $i++){ ?>
                <tr>
                    <th>5</th>
                    <td><?php echo ($i+1); ?></td>
                    <th><?php echo (5*($i+1)); ?></th>
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

