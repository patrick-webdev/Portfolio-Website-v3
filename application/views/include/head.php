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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= config_item('base_uri') ?>assets/css/style.css">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= config_item('base_uri') ?>assets/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= config_item('base_uri') ?>assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= config_item('base_uri') ?>assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?= config_item('base_uri') ?>assets/favicon/site.webmanifest">
  <title>Patrick Caldwell - <?= $page ?></title>
</head>
<body>

<nav id="nav" class="dark" style="display:none">
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

<nav class="navbar navbar-expand-lg dark" id="nav">
  <div class="container-fluid">
    <a class="navbar-brand bold" href="<?= config_item('base_uri') ?>">Patrick Caldwell</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <?php
              foreach($navLinks as $navLink){
                  $class = "";
                  if ($navLink["pageName"] == $page) $class = "link--color link--underline";
                  echo "<li class='nav-item'><a href='" . config_item('base_uri') . $navLink["url"] . "' class='$class nav-link'>" . $navLink["text"] . "</a></li>";
              }
          ?>
        </ul>
      </div>
  </div>
</nav>