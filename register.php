<?php include("server.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
    <div class="container">

    <div class="header">
        <h2>Register Here</h2>
    </div>

    <form action="register.php" method="Post">
    <?php include("errors.php"); ?>
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" required id="">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" required id="">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password_1" required id="">
        </div>
        <div>
        <label for="password">Confirm Password</label>
            <input type="password" name="password_2" required id="">
        </div>

        <button type="submit" name="reg_user" >Submit</button>
        <p>Already a user? <a href="login.php"><b>Login</b> </a> here</p>

    </form>




    </div>
</body>
</html>