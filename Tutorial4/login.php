<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
       session_start();
       if(isset($_POST['Login'])) {

            $email= $_POST['email'];
            $password= $_POST['password'];
 
            if($email && $password) {
                if($email == "admin@admin.com" && $password == "secret") {
                    $_SESSION['email'] = $email;
                    $_SESSION['password']= $password;
                    header('location:home.php');
                }
                else {
                    echo "Invalid User";
                }
            }
        }
    ?>
  <div class="container">
    
      <div>Login Form</div>
        <div>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="InputEmail">Email address</label>
                    <input name="email" type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="InputPassword">Password</label>
                    <input name="password" type="password" class="form-control" id="InputPassword">
                </div>
                <button name="Login" type="submit" >Login</button>
            </form>
        </div>

  </div>
</body>
</html>