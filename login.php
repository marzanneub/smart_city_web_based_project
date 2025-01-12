<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Photos/Self/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="login_style2.css">
    <title>Login</title>
</head>
<body>
<?php
require('auto_login.php');
?>
    <div class="upper_buttons"><a href="index.php" class="btn btn-primary">Back</a></div>
    <div class="main">
        <form action="login_back.php" method="POST">
            <div class="form-group">
                <label for="user_id">User ID</label>
                <input type="text" class="form-control" name="user_id" aria-describedby="emailHelp" placeholder="Enter user id">
            </div>
            </br>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            </br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php if(isset($_GET['message'])) { ?>
		    <div class="message"><?php echo $_GET['message']; ?></div>
		<?php } ?>
    </div>
    
    
</body>
</html>