<?php include 'header.php'; ?>

<?php 
    $combination = "Monochromatic";

    //if
    if ($combination == "Monochromatic") {
        $colors = [
            "#ADD8E6" => "Light Blue",
            "#4682B4" => "Steel Blue",
            "#000080" => "Navy Blue"
        ];
    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Harmonies</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kedebideri:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: linear-gradient(to bottom, #333333, #000000);
            color: white;
            font-family: Kedebideri, sans-serif;
            text-align: center;
        }
        .color-box {
            width: 100px;
            height: 100px;
            display: inline-block;
            text-align: center;
            line-height: 100px;
            font-family: Kedebideri, sans-serif;
            font-weight: bold;
            border-radius: 6px;
            box-shadow: 0 0 6px rgba(173, 162, 162, 0.5);
        }
    </style>
</head>
<body>
    <h2>Palette: <?= $combination ?> (3 colors)</h2>
    <?php foreach ($colors as $hex => $name): ?>
        <div class="color-box" style="background-color: <?= $hex ?>;"></div>
        <p><?= $name ?> - <?= $hex ?></p>
    <?php endforeach; ?>
    <br>
</body>
</html>

<?php include 'footer.php'; ?>