<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: home.php");
}
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $result = mysqli_query($conn, "SELECT * FROM user_tb WHERE email = '$email'");
    
    if ($result) {
      if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($password == $row['password']) {
          session_start();
          $_SESSION["login"] = true;
          $_SESSION["id"] = $row["id"];
          header("Location: home.php");
          exit;
        } else {
          echo "<script> alert('Wrong Password'); </script>";
        }
      } else {
        echo "<script> alert('User Not Registered'); </script>";
      }
    } else {
      // Handle query execution error
      echo "Error: " . mysqli_error($conn);
    }
  }
  
    


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

</head>

<body>

    <div class="container-fluid border border-secondary-subtle w-75 mt-5">
        <h3 class=" text-center mt-5 bs-success-text-emphasis ">Login Now!!!</h3>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <input type="submit" class="btn btn-primary mt-3 form-control" name="submit" value="Login">

                    <p class="text-center text-muted mt-3 mb-5">Don't have an account? <a href="register.php" class="fw-bold text-body"><u>Register here</u></a></p>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>