<?php
include '../vendor/autoload.php';

use App\Calculator\Calculator;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="?">
        <input type="text" name="a">
        <select name="op">
            <option value="mul">*</option>
            <option value="sum">+</option>
            <option value="del">/</option>
            <option value="min">-</option>
        </select>
        <input type="text" name="b">
        <input type="submit" value="OK">
    </form>
</body>
<?php
if (!empty($_POST)) {
    echo (new Calculator($_POST['a'], $_POST['b']))->{$_POST['op']}();
}
?>

</html>