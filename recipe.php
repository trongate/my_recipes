<?php
$title = "Rustic Tomato Soup";
$image = "images/tomato_soup.png";
$image_alt = "tomato soup";

$description = "This soup starts with tomatoes roasted low and slow until they collapse into something jammy and sweet, then simmered with garlic, onion, and vegetable stock. A finishing swirl of cream and torn basil rounds out the acidity. Serve with something crusty for dunking.";

$prep_time = "15 min";
$cook_time = "55 min";
$serves = "4";

$ingredients = [
    [
        'ingredient' => 'Ripe plum tomatoes, halved',
        'amount' => '1.5 kg'
    ],
    [
        'ingredient' => 'Olive oil',
        'amount' => '3 tbsp'
    ],
    [
        'ingredient' => 'Garlic cloves, unpeeled',
        'amount' => '4'
    ],
    [
        'ingredient' => 'Yellow onion, chopped',
        'amount' => '1'
    ],
    [
        'ingredient' => 'Vegetable stock',
        'amount' => '500 ml'
    ],
    [
        'ingredient' => 'Double cream',
        'amount' => '100 ml'
    ],
    [
        'ingredient' => 'Fresh basil leaves',
        'amount' => '1 handful'
    ],
    [
        'ingredient' => 'Salt & black pepper',
        'amount' => 'to taste'
    ]
];

$instructions = [
    [
        'title' => 'Roast the tomatoes.',
        'description' => 'Heat oven to 200°C (400°F). Toss tomatoes and garlic with olive oil, salt, and pepper. Roast for 35 minutes, until blistered.'
    ],
    [
        'title' => 'Soften the onion.',
        'description' => 'While the tomatoes roast, cook the onion in a splash of oil over medium heat for 8–10 minutes, until soft and translucent.'
    ],
    [
        'title' => 'Combine.',
        'description' => 'Squeeze the roasted garlic from its skin into the pot with the onion. Add the roasted tomatoes and their juices.'
    ],
    [
        'title' => 'Simmer.',
        'description' => 'Pour in the stock, bring to a gentle simmer, and cook uncovered for 15 minutes to let the flavours meld.'
    ],
    [
        'title' => 'Blend.',
        'description' => 'Purée with an immersion blender (or in batches in a stand blender) until smooth.'
    ],
    [
        'title' => 'Finish.',
        'description' => 'Stir in the cream, taste, and adjust salt and pepper. Tear in most of the basil.'
    ],
    [
        'title' => 'Serve.',
        'description' => 'Ladle into bowls, top with remaining basil, and serve with crusty bread.'
    ]
];
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