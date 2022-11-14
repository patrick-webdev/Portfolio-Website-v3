<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= config_item('base_uri') ?>assets/css/style.css">
    <title>Patrick Caldwell - <?= $page ?></title>
</head>
<body>

<nav id="nav" class="dark">
    <div id="nav__left">
        <a href="<?= config_item('base_uri') ?>" class="bold">Patrick Caldwell</a>
    </div>
    <div id="nav__right">
        <?php
            foreach($navLinks as $navLink){
                $class = "";
                if ($navLink["pageName"] == $page) $class = "link--color link--underline";
                echo "<a href='" . config_item('base_uri') . $navLink["url"] . "' class='$class'>" . $navLink["text"] . "</a>";
            }
        ?>
    </div>
</nav>