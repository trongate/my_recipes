<?php
include('data/tomato_soup.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title><?= $title ?></title>
</head>
<body>
    <div class="container">
        <h1><?= $title ?></h1>
        <div class="image-container">
            <img src="<?= $image ?>" alt="<?= $image_alt ?>">
        </div>
        <p><?= $description ?></p>
        <div class="key-stats">
            <div>
                <span>Prep</span>
                <span><?= $prep_time ?></span>
            </div>
            <div>
                <span>Cook</span>
                <span><?= $cook_time ?></span>
            </div>
            <div>
                <span>Serves</span>
                <span><?= $serves ?></span>
            </div>
        </div>
        <h2>Ingredients</h2>
        <table>
            <thead>
                <tr>
                    <th>Ingredient</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($ingredients as $item) { ?>
                <tr>
                    <td><?= $item['ingredient'] ?></td>
                    <td><?= $item['amount'] ?></td>
                </tr><?php
                }
                ?>
            </tbody>
        </table>
        <h2>Instructions</h2>
        <ol>
            <?php
            foreach($instructions as $instruction) { ?>
            <li><strong><?= $instruction['title'] ?></strong> <?= $instruction['description'] ?></li>
            <?php
            }
            ?>
        </ol>
    </div>
</body>
</html>