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
}
</style>
<body>
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
</body>

</html>