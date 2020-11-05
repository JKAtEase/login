<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <h1>Login</h1>
            <form action="validation.php" method="post">
                <label for="username">USERNAME</label>
                <input type="text" name="username" id="username"><br><br>
                <label for="password">PASSWORD</label>
                <input type="password" name="password" id="password"><br><br>
                <input type="submit" value="Login">
            </form>
        </div>

        <div>
            <h1>Sign Up</h1>
            <form action="signup.php" method="post">
                <label for="name">NAME</label>
                <input type="text" name="name" id="name"><br><br>
                <label for="email">EMAIL</label>
                <input type="email" name="email" id="email"><br><br>
                <label for="phone">PHONE</label>
                <input type="tel" name="phone" id="phone"><br><br>
                <label for="username">USERNAME</label>
                <input type="text" name="username" id="username"><br><br>
                <label for="password">PASSWORD</label>
                <input type="password" name="password" id="password"><br><br>
                <input type="submit" value="Sign up">
            </form>
        </div>
    </div>
</body>
</html>