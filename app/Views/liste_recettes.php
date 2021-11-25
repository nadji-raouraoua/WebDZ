<?php

/**
 * @var string $titre_page       Le titre de la page (créée automatiquement par CI via le tableau $data)
 * @var string $sous_titre_page  Le sous-titre de la page (créée automatiquement par CI via le tableau $data)
 * @var array  $recettes         Liste des recettes (créée automatiquement par CI via le tableau $data)
 * @var array  $recette          Une recette (créée par l'instruction foreach)
 * @var string $ingredient       Un ingrédient (créée par l'instruction foreach)
 */
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?= esc($titre_page) ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <style type="text/css">
        .titre {
            padding: 3rem 1.5rem;
        }

        article {
            padding: 1.5rem 1.5rem;
        }
    </style>

</head>

<body>

    <main role="main" class="container">
        <div class="titre">
            <h1>
                <?= esc($titre_page) ?>
                <small class="text-muted"><?= esc($sous_titre_page) ?></small>
            </h1>
        </div>

        <div class="container">

            <?php foreach ($recettes as $recette) : ?>
                <article>
                    <h3><?= esc($recette['titre']) ?></h3>
                    <h5>Ingrédients</h5>
                    <ul>
                        <?php foreach ($recette['ingredients'] as $ingredient) : ?>
                            <li><?= esc($ingredient) ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <h5>Préparation</h5>
                    <p><?= esc($recette['instructions']) ?></p>
                </article>
                <hr>
            <?php endforeach; ?>

        </div>

    </main>

    <footer>
        <p class="text-center">&copy; 2020 Mon site de recettes</p>
    </footer>

</body>

</html>