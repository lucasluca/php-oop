<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercicio Aula 10</title>
</head>
<body>
    <h1>Herença Iniciada</h1>
    <pre>
        <?php 
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';
        
            $p1 = new Pessoa();

            print_r($p1);
            
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();

            $p1->setNome("Pedro");
            $p2->setNome("Maria");
            $p3->setNome("Claudio");
            $p4->setNome("Fabiana");

            $p2->setCurso("informatica");
            $p3->setSalario(2500);
            $p4->setSetor("Estoque");

            //$p1->receberAum(200);

            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);

        ?>
    </pre>
</body>
</html>