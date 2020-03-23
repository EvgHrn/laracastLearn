<?php

$db = require 'bootstrap.php';

$routs = [
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'about/culture' => 'conrtollers/about-culture.php',
    'contact' => 'controllers/contact.php'
];