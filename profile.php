<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Profile</title>
</head>
<body>
<div class="banner2">
        <div class="navbar">
          <img src="logo.jpg" class="logo">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="game.html">Games</a></li>
            <li><a href="#">Memes</a></li>
            <li><a href="#">Information</a></li>
            <li><a href="#">Profile</a></li>
          </ul>
        </div>

    <form method="post" action="<?htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
        <h3>Username:</h3><input type="text" name="user">
        <h3>Password:</h3><input type="text" name="password">
    </form>
</body>
</html>