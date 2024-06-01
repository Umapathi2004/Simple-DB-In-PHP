<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/index.css">
    
<style>body{height:100dvh;overflow-y:hidden;}</style>
</head>
<body>
    <div class="container">
    <form action="validate.php" method="post">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username" placeholder="Username..." required autocomplete="off">
        <label for="password">Password :</label>
        <input type="password" name="password" id="password" placeholder="Password..." required autocomplete="off">
        <button>Login</button>
    </form>
</body>
</html>