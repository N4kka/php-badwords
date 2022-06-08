<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $paragraph = "This is a paragraph!";
    ?>
    <h1> <?php echo $paragraph ?></h1>;
    <h2> <?php echo strlen($paragraph) . " letters, This is the paragraph length." ?></h2>

</body>

</html>