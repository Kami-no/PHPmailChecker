<?php

include('mcheck.php')

// Mail to check (TO) for request like index.php?to=try@man.ru
$ext_to = $_GET['to'];
// Mail of checker (FROM)
$ext_from = 'try@man.ru';
// Mail server of checker, better to have PTR domain record
$ext_srv = 'mail.man.ru';
// Get result as boolean TRUE/FALSE
$ext_bool = TRUE;
// Verbose server communication
$ext_debug = TRUE;


// Usage
echo mCheck($ext_to,$ext_from,$ext_srv,$ext_bool,$ext_debug);
