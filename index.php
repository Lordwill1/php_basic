<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fruits = array("Apple" => "Red", "Banana" => "Yellow", "Orange" => "Orange");

    foreach ($fruits as $fruit => $color) {
        echo "This is a ". $fruit . ", that has a colour of " . $color . "<br>";


    }

    ?>
</body>
</html>