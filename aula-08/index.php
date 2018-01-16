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
            require_once 'Lutador.php';
            require_once 'Luta.php';
            
            $l = array();
            $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3, 1);
            $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $l[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $l[3] = new Lutador("Dead Code", "Australia", 28, 1.93, 81.6, 13, 0, 2);
            $l[4] = new Lutador("Nerdart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

            $uec1 = new Luta();
            $uec1->marcarLuta($l[1],$l[4]);
            $uec1->Lutar();

            $l[0]->status();
            $l[1]->status();
        ?>
    </pre>
</body>
</html>