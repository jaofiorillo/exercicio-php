<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 

         $mes = $_POST ["digite o mes"];

         if($mes >1 && <=12){
           echo. ($mes);
         }
         else{
            echo."valor invalido";
         }
        ?>
    </div>
</body>
</html>