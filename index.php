<!DOCTYPE html>
<html>
<head>
    <title>Let's Chat</title>
</head>
<body>
<div id="main">
    <div id="info">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label><b>Enter Username:</b></label>
            <input type="text" name="username" placeholder="Username"><br><br>
            <label><b>Enter Password:</b></label>
            <input class="login-field  login-field-password form-control input-lg" name="password" id="password" type="password" placeholder="Password" />
            <br><br>
            <button type="submit"><b></b>Login</button>
        </form>

        <form action="signup.php" method="post">
            <h2>New User? Sign Up</h2>
            <label>Enter Email:</label>
            <input type="text" name="email" placeholder="abc123@gmail.com"><br><br>
            <label>Enter Username:</label>
            <input type="text" name="username" placeholder="Username"><br><br>
            <label>Enter Password:</label>
            <input class="login-field  login-field-password form-control input-lg" name="password" id="password" type="password" placeholder="Password" />
            <br><br>
            <button type="submit"><b></b>Sign Up</button>
        </form>

    </div>
</div>

<script>
    $("#showHide").click(function () {
        if ($(".login-field-password").attr("type") == "password") {
            $(".login-field-password").attr("type", "text");
            $("#showHide").text("Hide");

        } else {
            $(".login-field-password").attr("type", "password");
            $("#showHide").text("Show");
        }
    });
    </script>
</body>
</html>