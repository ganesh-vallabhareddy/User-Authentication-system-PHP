<?php include("server.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <div class="container">

    <div class="header">
        <h2>Login Here</h2>
    </div>

    <form method="POST" action="login.php" >
     <?php include("errors.php"); ?>
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" required id="">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password_1" required id="">
        </div>


        <button type="submit" name="login" >Login</button>
        <p>New user? <a href="register.php"><b>Register</b> </a> here</p>

    </form>

    </div>
</body>
</html>