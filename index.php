<?php 
    //Allow the config
    define("_CONFIG_", true);
    //Require the config
    require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="follow">
    <title>Page Title</Title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.19/dist/css/uikit.min.css" />
</head>
<body>

<div class="uk-section uk-container">
    <?php
    echo "Hello World. Today is: ";
    echo date("Y m d");
    ?>
</div>
<?php require_once "footer.php" ?>
<a href="login.php">Login</a>
<a href="register.php">Register</a>
</body>
</html>