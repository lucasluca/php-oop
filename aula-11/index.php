<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercicio Aula 10</title>
</head>
<body>
    <h1>Herença Iniciada Avançada</h1>
    <pre>
        <?php 
            
            require_once 'Aluno.php';
            require_once 'Bolsista.php';
            //require_once 'Professor.php';

            $a1 = new Aluno();
            $b1 = new Bolsista();

            $a1->setNome("lucas");
            $b1->setNome("Mateus");
            $a1->pagarMensalidade();
            $b1->pagarMensalidade();
            
            print_r($a1);
        
           

        ?>
    </pre>
</body>
</html>