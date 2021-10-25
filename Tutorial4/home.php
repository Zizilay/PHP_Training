<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <?php 
      session_start();
        if(!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
          header('location:login.php');
        }
    ?>
  <div class="container">
    <ul class="nav bg-dark justify-content-end">
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="logout.php">Logout</a>
      </li>
    </ul>
 </div>
</body>
</html>