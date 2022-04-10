<!--Snack 1------------------------------------------------------------------------------------------------------------>
<!--
<?php /*
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
    
*/?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <?php /*
                for ($i=0; $i < count($arrayPartite); $i++) { ?>
                    <h1> <?= $arrayPartite[$i]['squadre']['casa'] ?> - <?= $arrayPartite[$i]['squadre']['ospite'] ?> | <?= $arrayPartite[$i]['punteggi']['casa'] ?> - <?= $arrayPartite[$i]['punteggi']['ospite'] ?> </h1>
                <?php }
            */?>
        </li>
    </ul>
</body>
</html>
-->
<!--Snack 1------------------------------------------------------------------------------------------------------------>



<!--Snack 2------------------------------------------------------------------------------------------------------------>

<!--Snack 2------------------------------------------------------------------------------------------------------------>



<!--Snack 4------------------------------------------------------------------------------------------------------------>
<?php /*
    $arrayNumber = [];

    while (count($arrayNumber) < 15 ) { 
        $numero = rand(1, 20);
        if (!in_array($numero, $arrayNumber)) {
            $arrayNumber[] = $numero;
        };
    }

    for ($i=0; $i < count($arrayNumber); $i++) { 
        echo "$arrayNumber[$i] /";
    };
*/?>
<!--Snack 4------------------------------------------------------------------------------------------------------------>



<!--Snack 5------------------------------------------------------------------------------------------------------------>
<?php 
    $stringa = 'Alcibiade, figlio di Clinia del demo di Scambonide (in greco antico: Ἀλκιβιάδης, Alkibiádēs; Atene, 450 a.C. – Frigia, 404 a.C.), è stato un militare e politico ateniese. Oratore e statista di altissimo livello, fu lultimo membro di spicco degli Alcmeonidi, il clan aristocratico a cui apparteneva la famiglia di sua madre, poi decaduto con la fine della guerra del Peloponneso. Svolse un ruolo importante nella seconda parte di questo conflitto, come consigliere strategico, comandante militare e politico.

    Durante la guerra del Peloponneso, Alcibiade cambiò più volte il proprio partito politico: nella natia Atene, dal 420 a.C al 410 a.C. fu fautore di unaggressiva politica estera impegnandosi nellorganizzazione della spedizione ateniese in Sicilia, ma passò dalla parte di Sparta quando i suoi oppositori politici lo accusarono del sacrilegio delle erme. A Sparta propose e supervisionò importanti campagne militari contro la sua città natale, ma anche da lì fu ben presto obbligato a rifugiarsi in Persia, dove divenne consigliere del satrapo Tissaferne finché i suoi sostenitori politici ateniesi non gli chiesero di tornare. Fu poi generale ad Atene per diversi anni, ma i suoi nemici riuscirono a farlo esiliare una seconda volta.
    
    A detta di molti storici, se avesse potuto comandare la spedizione in Sicilia da lui progettata (guidata invece da Nicia), loperazione non sarebbe terminata con la disastrosa disfatta degli Ateniesi. Negli anni passati a Sparta, Alcibiade ebbe un ruolo determinante nella caduta di Atene: loccupazione permanente della città di Decelea e le rivolte di molti territori sotto il controllo di Atene furono da lui consigliate o supervisionate. Una volta tornato alla sua città natale, comunque, ebbe un ruolo cruciale in una successione di vittorie ateniesi che forse avrebbero costretto Sparta alla pace.
    
    Alcibiade favorì tattiche anticonvenzionali, spesso assoggettando città con linganno, proponendo negoziati, utilizzando larte militare poliorcetica solo in casi estremi. Le qualità politiche e militari di Alcibiade furono spesso utili agli stati che beneficiarono dei suoi servigi, ma la sua propensione a inimicarsi i potenti gli impedì di rimanere a lungo in uno stesso luogo e, alla fine della guerra, i giorni in cui aveva avuto un ruolo politico importante divennero solo un lontano ricordo.';

    $arrayStringhe = explode('.', $stringa);
    for ($i=0; $i < count($arrayStringhe); $i++) { ?>
        <h3><?= $arrayStringhe[$i]?></h3>
    <?php }
?>
<!--Snack 5------------------------------------------------------------------------------------------------------------>