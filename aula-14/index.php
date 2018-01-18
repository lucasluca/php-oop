<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercicio Final- Curso POO</title>
</head>
<body>
    <h1>Exercicio Final- Curso POO</h1>
    <pre>
        <?php
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            require_once 'Visualizacao.php';
            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");

            $g[0] = new Gafanhoto("Jubileu",22, "M", "juba");

            $vis[0] = new Visualizacao($g[0], $v[0]);
            $vis[1] = new Visualizacao($g[0], $v[1]);
            $vis[2] = new Visualizacao($g[0], $v[0]);

            $vis[0]->avaliar();
            $vis[1]->avaliarPorc(85);

            print_r($vis);

        ?>
    </pre>
</body>
</html>