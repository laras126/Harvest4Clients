<?php
session_start();
require_once 'inc/functions.inc.php';
require_once 'lang/en.php'; //default language
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

		    <header class="page-header">
		        <h1>Login</h1>
		    </header>

			<form method="post" action="index.php" class="input-group">
			    <label><?php echo __('login.user'); ?></label><input class="form-control" type="text" name="user">
			    <br>
			    <label><?php echo __('login.password'); ?></label><input class="form-control" type="password" name="password">
			    <br>
			    <input type="submit" class="btn btn-default btn-md" value="<?php echo __('login'); ?>">
			    
			</form>
		</div>
	</body>

</html>