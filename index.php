<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>php-snacks-b1</title>

</head>
<body>
<!--Snack 1---------------------------------------------------------------------------->
<?php 

        $arrayPartite = [
            [
                'squadre' => [
                    'casa' => 'Olimpia Milano',
                    'ospite' => 'Cantù'
                ],
                'punteggi' => [
                    'casa' => 95,
                    'ospite' => 80
                ],
            ],
            [
                'squadre' => [
                    'casa' => 'Brindisi',
                    'ospite' => 'Piacenza'
                ],
                'punteggi' => [
                    'casa' => 95,
                    'ospite' => 80
                ],
            ],
        ];

    ?>

    <ul>
        <?php
            for ($i=0; $i < count($arrayPartite); $i++) { ?>
                <li><?= $arrayPartite[$i]['squadre']['casa']?> - <?= $arrayPartite[$i]['squadre']['casa'] ?></li>
            }<?php
        ?>
    </ul>
    
</body>
</html>