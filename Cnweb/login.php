<?php
    function inc() {
        include("./incs/class_db.php");
        include("./incs/class_home.php");
    
    }
    inc();
    // khởi tạo class homelib để gọi hàm login
    $homelib = new homelib();
    if(isset($_POST["login_action"])){

        $messgae = $homelib->login();
        $error = $messgae[0];
        $data = $messgae[1];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
	<h1>Đăng Nhập</h1>
	<form method="post" action="login.php">
		<table cellspacing="0" cellpadding="5">
			<tr>
				<td>Tên của bạn</td>
				<td><input type="text" name="username" id="username"
					value="<?php echo isset($data['username']) ? $data['username'] : ''; ?>" />
                  <?php echo isset($error['username']) ? $error['username'] : ''; ?>
               </td>
			</tr>
			<tr>
				<td>Mật khẩu của bạn</td>
				<td><input type="text" name="password" id="password"
					value="<?php echo isset($data['password']) ? $data['password'] : ''; ?>" />
                  <?php echo isset($error['password']) ? $error['password'] : ''; ?>
               </td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login_action" value="Đăng nhập" /></td>
			</tr>
		</table>
	</form>
	<?php echo isset($error['message']) ? $error['message'] : ''; ?>

</body>
</html>