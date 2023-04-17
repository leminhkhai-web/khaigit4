<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <script src="./js_NAK/jquery-3.6.4.min.js"></script>
        <link rel="stylesheet" href="./stylescss_LMK/mycss.css">
        <title>Login Website</title>
    </head>
    <body>
        <div id="loginBody">
            <div class="head">
            <h4>Đăng nhập hệ thống</h4>
            </div>
            <div class="main">
            <form name="frmLogin" method="post" action="elements_LMK/mUser/userAct.php?reqact=checklogin">
                <table>
                    <tr>
                        <i class="k1"></i>
                        <td><input type="text" placeholder="username" id="username"></td></tr>
                    <tr>
                        <i class="k2"></i>
                        <td><input type="password" placeholder="password" id="password"></td></tr>
                    <tr>
                        <td><input type="submit" value="Đăng nhập"></td></tr>
                </table>
            </form>
            </div>
        </div>
    </body>
</html> 
<!-- <!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="administrator/stylescss_LMK/mycss.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<div class="header">
		<h1>login</h1>
	</div>
	<div class="main">
		<form>
			<span>
				<i class="fa fa-user"></i>
				<input type="text" placeholder="Username">
			</span>
			<br>
			<span>
				<i class="fa fa-lock"></i>
				<input type="password" placeholder="Password">
			</span>
			<br>
			<button>Login</button>
		</form>
		<p>OR Sign Using</p>
	</div>
	<div class="social">
		<a href=""><i class="fab fa-facebook-f"></i></a>
		<a href=""><i class="fab fa-twitter"></i></a>
		<a href=""><i class="fab fa-google"></i></a>
	</div>
</div>
</body>
</html> -->
