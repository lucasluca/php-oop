<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 02 - POO</title>
</head>
<body>
    <pre>
        <?php 
        
            require_once 'Caneta.php';
            $c1 = new Caneta("Lucas","Preta",1.0);
            
            //echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
            print_r($c1);

            $c1->setModelo("Augusto");
            print_r($c1);
        
        
        ?>
    </pre>
    
</body>
</html>