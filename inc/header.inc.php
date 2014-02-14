<?php
session_start();
require_once 'settings.inc.php';
require_once 'functions.inc.php';
require_once 'login.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo __('timetracking') ?></title>
    <link type="text/css" href="stylesheets/styles.css" rel="stylesheet"/>
    <link type="text/css" href="css/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet"/>
</head>
<body>
<div class="container">

<?php include 'inc/menu.inc.php';?>

    <header class="page-header">
        <h1><?php
            $clientData = getData($domain.'clients/'.$clients[$user]['client']);
            $clientData = simplexml_load_string($clientData);
            echo $clientData->name . '<br />' .nl2br($clientData->details);
        ?></h1>        
    </header>

