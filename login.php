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
		        <p class="lead">Please login to view details on your project.</p>
		    </header>

			<form method="post" action="index.php" class="col-md-3">
				<div class="form-group">
			    	<label><?php echo __('login.user'); ?></label><input class="form-control" type="text" name="user">
			    </div>
			    <div class="form-group">
			    	<label><?php echo __('login.password'); ?></label><input class="form-control" type="password" name="password">
			    </div>
			    <div class="form-group">
			    	<input type="submit" class="btn btn-default btn-md" value="<?php echo __('login'); ?>">	
			    </div>
			</form>
		</div>
	</body>

</html>