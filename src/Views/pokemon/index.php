<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pokemon List</title>
</head>
<body>
<h1>Pokemon List</h1>
<ul>
    <?php foreach ($pokemons as $pokemon): ?>
        <li><?= $pokemon->name ?> (<?= $pokemon->type ?>)</li>
    <?php endforeach; ?>
</ul>
</body>
</html>