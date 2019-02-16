<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Houses</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1 style="text-align: center;">Houses</h1>
    <ul class="container">
        <?php foreach ($houses as $house) :?>
            <div class="list">
                <h2>House</h2>
                <li>Width: <?= $house->getWidth();?>m<sup>2</sup></li>
                <li>Height: <?= $house->getHeight()?>m<sup>2</sup></li>
                <li>Depth: <?= $house->getDepth()?>m<sup>2</sup></li>
                <li>Floors: <?= $house->getFloors()?></li>
                <li>Rooms: <?= $house->getRooms()?></li>
                <li>Price: €<?= $house->getPriceTotal()?></li>
            </div>
        <?php endforeach ?>
    </ul>
</body>
</html>