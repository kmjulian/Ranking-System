<?php require'sys/server.php'; ?>

<html>
<style>
.bg {
    /* The image used */
    background-image: url("sys/images/bg.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center top;
    background-repeat: no-repeat;
    background-size: cover;
    font-family: sans-serif;
}

.container {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 700px;
	height: 480px;
	border-radius: 5px;
	border: 10px solid rgba(255,255,255,.2);
	box-shadow: 10px 10px 15px rgba(0,0,0,.5);

}

.imgBox {
	width: 335px;
	height: 480px;
	overflow: hidden;
	float: left;
	background-image: url("sys/images/books.jpg");
}

.imgBox img {
	width: 100%;

}

.loginBox {
	float: right;
	width: 365px;
	height: 480px;
	box-sizing: border-box;
	padding: 80px 40px;
	background: rgba(255,255,255,.8);
}

</style>

<!-- <body>
	<div class="bg">
<br><br><br><br><br><br><br>
		<center><h1>Ranking</h1></center>
			<form action="" method="post">
				<center>
					<?php  include'sys/error.php';?>
				<input type="text" name="uname" placeholder="Username" required><br><br>
				<input type="password" name="pword" placeholder="Password" required><br><br>
				<input type="submit" name="login" value="Log in">

				</center>
			</form>
			</div>
</body> -->

<body>
	<div class="bg">
	<div class="container">
		<div class="imgBox">
		</div>

		<div class="loginBox">
			<form class="form-container" method="post" action="?">
				<center><h2>Login</h2></center>

				<br>

				<center><div class="form-group">
					<label class="form-group">Username</label>
					<div class="form-controls">
						<input type="text" name="uname" class="input-xlarge"/>
					</div>
				</div></center>

				<br>

				<center><div class="form-group">
					<label class="form-group">Password</label>
					<div class="form-controls">
						<input type="Password" name="pword" class="input-xlarge">
					</div>
				</div></center>

				<br>

				<div class="checkbox" style="text-align: left; padding-left: 60px">
					<label>
						<input type="checkbox">Remember Me
					</label>
				</div>

				<br>

				<center><div class="form-group">
					<div class="form-controls">
						<input type="submit" name="login" class="btn btn-primary"/>
					</div>
				</div></center>

				<?php  include'sys/error.php';?>
			</form>
		</div>
	</div>
</body>

</html>