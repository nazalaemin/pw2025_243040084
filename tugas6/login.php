<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <style>
        body {
            background-color: #ffe6f0;
            font-family: 'Comic Sans MS', cursive;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #ffcce0;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0px 0px 10px #ff99cc;
            text-align: center;
        }
        .login-container img {
            width: 100px;
            margin-bottom: 20px;
        }
        input[type="text"], input[type="password"] {
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #ff99cc;
            border-radius: 10px;
            width: 80%;
        }
        input[type="submit"] {
            background-color: #ff66b2;
            border: none;
            padding: 10px 20px;
            color: white;
            font-weight: bold;
            border-radius: 10px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #ff3399;
        }
        .error {
            color: #ff3366;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="barbie.jpg/barbie.jpg">
        <h2>Login Admin</h2>
        <?php
        if (isset($_GET['error'])) {
            echo "<p class='error'>Username atau Password salah!</p>";
        }
        ?>
        <form method="post" action="proses_login.php">
            <input type="text" name="username" placeholder="Username"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
