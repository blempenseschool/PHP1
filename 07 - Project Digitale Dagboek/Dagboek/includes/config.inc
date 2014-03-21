<?php 

// Stylesheets die ingeladen moeten worden
$stylesheets = ['//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css',
                'css/main.css',
                'css/custom-header.css',
                'css/carousel.css'];

// Javascripts die ingeladen moeten worden
$scripts = ['https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', 
            '//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'];

// Database username en wachtwoord - beide "root" voor MAMP
$dbUsername = $dbPassword = "root";


// Include enkele bestanden die we nodig hebben
include 'includes/dbConnect.inc';
include 'includes/functions.inc';