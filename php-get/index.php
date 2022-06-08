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
    $second_paragraph = $_GET['name'];
    $censored_word = str_replace($second_paragraph,  'name', '***');
    $final_paragraph = $paragraph . '  ' . $censored_word;
    ?>
    <h1> <?php echo $paragraph ?></h1>;
    <h2> <?php echo strlen($paragraph) . " letters, This is the paragraph length." ?></h2>
    <h3><?php echo 'The word to be censored is ' . $second_paragraph ?></h3>
    <h1><?php echo $final_paragraph ?></h1>
    <h2> <?php echo strlen($final_paragraph) . " letters, This is the new paragraph length, including the censored word." ?></h2>

</body>

</html>