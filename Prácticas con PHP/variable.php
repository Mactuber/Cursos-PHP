<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Ambito PHP 
        $numero = "33";
        function prueba(){
            global $numero;
            echo $numero;
        }
        prueba();
    ?>
</body>
</html>