<?php

include("vendor/autoload.php");
use Helpers\Auth;
$auth = Auth::check();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link
      rel="stylesheet"
      href="css/bootstrap.min.css"
    />
</head>
<body>
    <div class="container mt-5">
        <h1 class="mt-5 mb-5">
            <?= $auth->name ?>
            <span class="fw-normal text-muted">
                (<?= $auth->role ?>)
            </span>
        </h1>
        <?php if(isset($_GET['error'])) : ?>
            <div class="alert alert-warning">
                Cannot upload file
            </div>
        <?php endif ?>
        <?php if($auth->photo) : ?>
            <img class="img-thumbnail mb-3" src="_actions/photos/<?= $auth->photo ?>" alt="Profile Photo" width="200">
        <?php endif ?>

        <form action="">
            
        </form>
    </div>
</body>
</html>