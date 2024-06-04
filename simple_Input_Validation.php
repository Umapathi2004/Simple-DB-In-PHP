<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn</title>
</head>
<body>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="name" id="">
        <input type="submit" value="Submit">
      </form>
      <?php
      if($_SERVER['REQUEST_METHOD']=="POST"){
        echo $_POST["name"];
      }
      ?>
</body>
</html>
