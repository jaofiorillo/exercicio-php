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
        <h1>Exercicio A</h1>
        <?php
        $num1 = $_POST ["valor1"];
        $num2 = $_POST ["valor2"];

        $result = $num1 + $num2;
        
        if(&result > 10){
            echo "o resultado é". ($result + 8);
        } else if($result <=10){
            echo "o resultado é". ($result - 5);
        }  
        ?>
    </div>
</body>
</html>