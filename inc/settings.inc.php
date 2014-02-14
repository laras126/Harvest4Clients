<?php
//Your Harvest domain
$domain = 'https://you.harvestapp.com/';

//email:password of your Harvest account
$credentials = "you@you.com:password";

//key = username
//options array = password, client id, language
$clients = array(
    'username' => array('password' => 'pass', 'client' => 1969769, 'language' => 'en') // Find the client ID from the URL in Harvest
);
