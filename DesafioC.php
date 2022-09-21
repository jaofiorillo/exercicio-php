<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
        $nome = $_POST ["nome"];
        $genero = $_POST ["genero"];
        $idade = $_POST ["idade"];

        if($idade > 25){
            echo .($nome,$genero) "voçe pode cadastrar";
        }
        if($idade <= 25){
            echo .($nome,$genero) "voçe não pode cadastrar";
        }
        ?>
    </div>
    
</body>
</html>