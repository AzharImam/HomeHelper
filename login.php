<?php 
require_once ('config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
<h1>Login Form</h1>

<form action="" method="post">

<!-- Email input -->
<div class="form-outline mb-4">
  <label class="form-label" for="form2Example1">Email address</label>
  <input type="email" id="form2Example1" class="form-control" name="email" />
</div>
  <br>
<!-- Password input -->
<div class="form-outline mb-4">
  <label class="form-label" for="form2Example2">Password</label>
  <input type="password" id="form2Example2" class="form-control" name="password" />
</div>
<br>

<!-- 2 column grid layout for inline styling -->
<div class="row mb-4">
  <div class="col d-flex justify-content-center">
    <!-- Checkbox -->
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
      <label class="form-check-label" for="form2Example31"> Remember me </label>
    </div>
  </div>

<!-- Submit button -->
<button type="submit" class="btn btn-primary btn-block mb-4" name="signin" >Sign in</button>
</form>

<?php 
        if (isset($_POST["signin"])) {
           
            $email = $_POST["email"];
            $password = $_POST["password"];

            $login_query = "SELECT * FROM `homeadmin` WHERE Email = '$email' and Password = '$password'";
            $execute_login_query = mysqli_query($conn, $login_query);
            $check_record = mysqli_num_rows($execute_login_query);
            if ($check_record == 1) {
                $fetch_data = mysqli_fetch_array($execute_login_query);
                $_SESSION["uname"] = $fetch_data[1];
                echo "<script>
                    window.location.href='content.php'
                </script>";
               
            }
            else{
                echo "<script>
                alert('Invalid Credentials');
                </script>";
            }

        }

?>
</body>
</html>