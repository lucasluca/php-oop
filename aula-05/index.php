<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php 
            require_once 'ContaBanco.php';

            /*

            $lucas = new ContaBanco();

            //$lucas->abrirConta("cp");
        
            //print_r($lucas);

            $lucas->pagarMensal();

            print_r($lucas);

            $lucas->sacar(30);

            print_r($lucas);

            $lucas->depositar(100);

            print_r($lucas);

            */

            $p1 = new ContaBanco(); //Jubileu
            $p2 = new ContaBanco(); //Creuza

            $p1->abrirConta("cc");
            $p1->setNumConta(1111);
            $p1->setDono("Jubileu");

            $p2->abrirConta("cp");
            $p2->setNumConta(2222);
            $p2->setDono("Creuza");

            $p1->depositar(300);
            $p2->depositar(500);

            $p2->sacar(1000);

            $p1->pagarMensal();
            $p2->pagarMensal();

            print_r($p1);
            print_r($p2);
        ?>
    </pre>
</body>
</html>