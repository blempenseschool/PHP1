<?php

// Functie om stylesheets uit de $stylesheets array af te drukken
function print_stylesheets($stylesheets) {
  foreach ($stylesheets as $stylesheet) {
    print "<link rel=\"stylesheet\" href=\"$stylesheet\"> \n";
  }
}


// Functie om scripts uit de $scripts array af te drukken
function print_scripts($scripts) {
  foreach ($scripts as $script) {
    print "<script src=\"$script\"></script> \n";
  }
}