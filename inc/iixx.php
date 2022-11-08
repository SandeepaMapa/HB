<?php session_start() ?>
<?php 
$connection = mysqli_connect('localhost', 'root', '', 'hbwebsite');

if (isset($_POST['submit'])) {

$email = mysqli_real_escape_string($connection, $_POST['email']);
$password 	= mysqli_real_escape_string($connection, $_POST['password']);


// prepare database query
$query = "SELECT * FROM user_reg1
			WHERE email = '{$email}'
			AND password = '{$password}'
			LIMIT 1";

			$result_set = mysqli_query($connection, $query);

			if ($result_set) {

				if (mysqli_num_rows($result_set)==1) {
					$user = mysqli_fetch_assoc($result_set);
					$_SESSION['user_id'] = $user['id'];
					$_SESSION['name'] = $user['name'];
					header('Location: user.php');
						}else{
							echo "Inavalid username or password";
						}
					}
				} 
 		?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="iix.php" method="post">
				<p>
					<label for="">Username</label>
					<input type="text" name="email" id="" placeholder="Email">
				</p>

				<p>
					<label for="">Password</label>
					<input type="password" name="password" id="" placeholder="password ">
				</p>

				<p>
					<button type="submit" name="submit">Log IN</button>
				</p>
	</form>
</body>
</html>