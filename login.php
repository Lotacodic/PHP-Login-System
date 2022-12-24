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
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1  " uk-grid="">
<form class="uk-form-stacked js-login">
<h2>Login</h2>
<div class="uk-margin">
    <label class="uk-form-label" for="form-stacked-text">Email</label>
    <div class="uk-form-controls">
        <input class="uk-input" id="form-stacked-text" type="email" placeholder="email@email.com">
    </div>
</div>

<div class="uk-margin">
    <label class="uk-form-label" for="form-stacked-text">Password</label>
    <div class="uk-form-controls">
        <input class="uk-input" id="form-stacked-text" type="password" placeholder="Your Password">
    </div>
</div>

<div class="uk-margin">
    <button class="uk-button uk-button-default" type="submit">LOGIN</button>
</div>
</form>
    </div>
</div>
<?php require_once "footer.php" ?>
</body>
</html>