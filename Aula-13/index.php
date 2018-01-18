<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercicio Aula 10</title>
</head>
<body>
    <h1>Polimorfismo de SobreCarga</h1>
    <pre>
        <?php 
            require_once 'Mamifero.php';
            require_once 'Lobo.php';

            $c = new Lobo();

            $c->emitirSom();

        ?>
    </pre>
</body>
</html>