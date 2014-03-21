<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-XU-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php if (!empty($page_title)) print $page_title . ' - ' ?>Digitale Dagboek</title>
  <?php if (!empty($stylesheets)) print_stylesheets($stylesheets); ?>
</head>
<body class="<?php if (!empty($body_class)) print $body_class; ?>">
  <?php include 'includes/navbar.inc'; ?>