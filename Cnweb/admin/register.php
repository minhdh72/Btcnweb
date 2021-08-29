<?php
function inc(){
	include "../incs/class_db.php";
	include "../incs/class_admin.php";
}
inc();

$adminlib = new adminlib();

// Kiểm tra có bấm nút Đăng ký hay không! nếu có thực hiện đăng ký
if (isset ( $_POST ["register_action"] )) {
	$message = $adminlib->register();
	$error = $message[0];
	$data = $message[1];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký</title>
</head>
<body>
    <h1>Đăng ký</h1>
    <form action="register.php" method="post">
        <table cellspacing ="0" cellpadding ="5">
            <tr>
                <td>Tên của bạn</td>
                <td><input type="text" name="username" id="username" value="<?php echo isset($data['username']) ? $data['username'] : '' ?>">
                    <?php 
                        echo isset($error['username']) ? $error['username'] : '';
                    ?>
                </td>
            </tr>
            <tr>
                <td>Email của bạn</td>
                <td><input type="text" name="email" id="email" value="<?php echo isset($data['email']) ? $data['email'] : '' ?>">
                    <?php 
                        echo isset($error['email']) ? $error['email'] : '';
                    ?>
                </td>
            </tr>
            <tr>
                <td>Mật khẩu của bạn</td>
                <td><input type="text" name="password" id="password" value="<?php echo isset($data['password']) ? $data['password'] : '' ?>">
                    <?php 
                        echo isset($error['password']) ? $error['password'] : '';
                    ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="register_action" value="Đăng ký">
                    
                </td>
                <td>
                    <button><a href="./index.php">Về admin</a></button>
                </td>
            </tr>
            
        </table>
    </form>
    <?php echo isset($error['note']) ? $error['note'] : ''; 
    ?>
    <style>
        a{
            text-decoration: none;
            color: #000;
        }
    </style>
</body>
</html>