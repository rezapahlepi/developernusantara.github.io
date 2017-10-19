<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/dev.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                  <div class="col-sm-6 col-xs-4">
                      </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/devn.png" alt="logo"></a>
                </div>
                
                
        
    </header><!--/header-->


            <div class="get-started center wow fadeInDown">
                <h2>Login</h2>
                <p class="lead">Apabila belum mempunyai akun silahkan register terlebih dahulu</p>
                <div class="request">
                    <h4><a href="#">Register</a></h4>         
				</div>
            </div><!--/.get-started-->
            
			<div align="center">
				<form name="form-login" method="POST" action="login.php">
					<table width="310" border="0" cellpadding="0" cellspacing="0">
						<tbody><tr bgcolor="blue">
							<td height="25" colspan="2" align="center">
							<font color="#FFFFFF">Form Login</font></td>
							
						</tr>
						<tr>
							<td width="106" height="16"></td>
							<td width="180"></td>
						</tr>
						<tr>
							<td height="18" align="right">Username : </td>
							<td><input type="text" name="user" size="20" maxlength="9"></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td height="18" align="right">Password : </td>
							<td><input type="password" name="password" size="20"></td>
						</tr>
						<tr>
							<td height="16"></td>
							<td></td>
						</tr>
						<tr>
							<td height="18" align="top></td>
							<td align="left"><input type="submit" value="Login"></td>
						</tr>
						<tr>
							<td height="16"></td>
							<td></td>
						</tr>
						<tr bgcolor="blue">
							<td height="25" colspan="2" align="top"></td>
						</tr>
						</tbody></table>
					</form>
				</div>

              		
            <div class="clients-area center wow fadeInDown">
                <h2></h2>
                <p class="lead"></p>
				
            </div>

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    We Do The Best For You </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.html">login</a></li>
                        <li><a href="about-us.html">About Us</a></li>                   
                       <li><a href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
