<?php
include '../vendor/autoload.php';

use App\Calculator\Calculator;
use TexLab\Html\Html;


?>
<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="css/style.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo Html::form()
        ->setAction('?')
        ->setMethod('POST')
        ->setInnerText(
            Html::input()
                ->setName('a')
                ->html()
        )
        ->addInnerText(
            Html::select()
                ->setName('op')
                ->setData([
                    'mul' => '*',
                    'sum' => '+',
                    'del' => '/',
                    'min' => '-'
                ]
                )
                ->html()
        )
        ->addInnerText(
            Html::input()
                ->setName('b')
                ->html()
        )
        ->addInnerText(
            Html::input()
                ->setType('submit')
                ->setValue('OK')
                ->html()
        )
        ->html();

    ?>
</body>
<?php
if (!empty($_POST)) {
    echo (new Calculator($_POST['a'], $_POST['b']))->{$_POST['op']}();
}
?>

</html>