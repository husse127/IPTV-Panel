<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('../config/config.php');
include('functions/admin.php');

include('../functions/db.php');
$db1 = new db;
$db1->connect();
$login = login_action($GLOBALS['__Connect'] , database_portfolio); ?><!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Stylesheets -->
  <link href="theme/style/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="theme/style/font-awesome.css">
  <link href="theme/style/style.css" rel="stylesheet">
  
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="theme/js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>

<body class="login">

<!-- Form area -->
<div class="admin-form">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <!-- Widget starts -->
            <div class="logo"><a href="index.html" class="navbar-brand"><span class="bold"><?php echo slogan ?> Admin panel</span></a></div>
            <div class="widget">
              <!-- Widget head -->
             <?php if($login['failed'] == 'failed') { ?><div class="failed" align="center">Incorrect use or password</div><?php } ?> <div class="widget-head">
                  Sign In              </div>

              <div class="widget-content">
                <div class="padd">
                  <!-- Login form -->
                  <form class="form-horizontal" method="post">
                    <!-- Email -->
                    <div class="form-group">
                      <i class="icon-user"></i>
                        <input name="uname" type="text" class="form-control" id="inputEmail" placeholder="Username" value="<?php if(isset($_GET['uname'])) { echo htmlspecialchars($_GET['uname']); } ?>">
                    </div>
                    <!-- Password -->
                    <div class="form-group">
                      <i class="icon-lock"></i>
                        <input name="pword" type="password" class="form-control" id="inputPassword" placeholder="Password" value="<?php if(isset($_GET['pword'])) { echo htmlspecialchars($_GET['pword']); } ?>">
                    </div>
                    <!-- Remember me checkbox and sign in button -->
                    <div class="form-actions">
                     
                          <button class="submit btn btn-primary pull-right" type="submit">
                              Sign In
                              <i class="icon-angle-right"></i>
                          </button>
                    </div>
                    <br />
                  </form>
				  
				</div>
              </div>
              
            </div>
      </div>
    </div>
  </div> 
</div>
	
		

<!-- JS -->
<script src="theme/js/jquery.js"></script>
<script src="theme/js/bootstrap.js"></script>
</body>
</html>
