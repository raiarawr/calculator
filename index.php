<?php
session_start();

if (!isset($_SESSION['expression'])) {
    $_SESSION['expression'] = '';
}

if (isset($_POST['input'])) {
    $_SESSION['expression'] .= $_POST['input'];
} 

if (isset($_POST['operator'])) {
    $_SESSION['expression'] .= ' ' . $_POST['operator'] . ' ';
} 

if (isset($_POST['dot'])) {
    $_SESSION['expression'] .= '.';
}

if (isset($_POST['clear'])) {
    $_SESSION['expression'] = '';
}

if (isset($_POST['equal'])) {
    $result = eval('return ' . $_SESSION['expression'] . ';');
    $_SESSION['expression'] = $result;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="calc">
    <h2>Calculator</h2>
    <form action="" method="post">
        <input type="text" class="maininput" name="expression" value="<?php echo @$_SESSION['expression'] ?>" disabled><br><br>
        <input type="submit" class="c" name="clear" value="c"><br><br><br><br><br>
        <input type="submit" class="numbtn" name="input" value="7">
        <input type="submit" class="numbtn" name="input" value="8">
        <input type="submit" class="numbtn" name="input" value="9">
        <input type="submit" class="calbtn" name="operator" value="/"><br>
        <input type="submit" class="numbtn" name="input" value="4">
        <input type="submit" class="numbtn" name="input" value="5">
        <input type="submit" class="numbtn" name="input" value="6">
        <input type="submit" class="calbtn" name="operator" value="*"><br>
        <input type="submit" class="numbtn" name="input" value="1">
        <input type="submit" class="numbtn"name="input" value="2">
        <input type="submit" class="numbtn"name="input" value="3">
        <input type="submit" class="calbtn"name="operator" value="-"><br>
        <input type="submit" class="numbtn" name="input" value="0">
        <input type="submit" class="equal" name="dot" value=".">
        <input type="submit" class="equal" name="equal" value="=">
        <input type="submit" class="calbtn" name="operator" value="+">
    </div>
    </form>
</body>
</html>
