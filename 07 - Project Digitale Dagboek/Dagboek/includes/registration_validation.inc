<?php 

$_POST['naam'] = trim($_POST['naam']);
if (empty($_POST['naam'])) {
  $foutmeldingen['naam'] = "Naam is verplicht";
} else {
  // Controleren dat er enkel letters en spaties in een naam staan
  if (!preg_match('/^[a-zA-Z ]*$/', $_POST['naam'])) {
    $foutmeldingen['naam'] = "Een naam mag enkel uit letters en spaties bestaan";
  }
}

$_POST['email'] = trim($_POST['email']);
if (empty($_POST['email'])) {
  $foutmeldingen['email'] = "Email is verplicht";
} else {
  // Controleren dat het een geldig email adres is
  if (!preg_match('/([\w\-]+\@[\w\-]+\.[\w\-]+)/', $_POST['email'])) {
    $foutmeldingen['email'] = "Geef een geldig email adres in";
  }
}

$_POST['password'] = trim($_POST['password']);
if (empty($_POST['password'])) {
  $foutmeldingen['password'] = "Paswoord is verplicht";
} else {
  if (strlen($_POST['password']) < 6) {
      $foutmeldingen['password'] = "Paswoord moet minstens 6 tekens lang zijn";
    } else {
      if ($_POST['password_confirm'] != $_POST['password']) {
        $foutmeldingen['password_confirm'] = "Paswoord confirmatie is niet hetzelfde als het paswoord";
      }
  }
}

if (!isset($_POST['voorwaarden'])) {
  $foutmeldingen['voorwaarden'] = "Je moet de voorwaarden accepteren";
}