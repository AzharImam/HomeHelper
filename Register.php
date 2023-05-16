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
    <title>Register Form</title>
</head>
<body>
<h1>Register Form</h1>

<form action="" method="post">

  <div class="form-outline mb-4">
    <label class="form-label" for="form2Example1">Name</label>
    <input type="text" id="form2Example1" class="form-control" name="name" />
  </div>
    <br>

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
  <!-- Password input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form2Example2">Confirm Password</label>
    <input type="password" id="form2Example2" class="form-control" name="cpassword" />
  </div>

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
  <button type="submit" class="btn btn-primary btn-block mb-4" name="signup" >Register</button>
</form>

<?php 
    if (isset($_POST['signup'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];


        if ($password == $cpassword) {
          $admin_insert = "INSERT INTO `homeadmin`(`Name`, `Email`, `Password`) VALUES ('$name','$email','$password')";

          $execute = mysqli_query($conn,$admin_insert);
          
          if($execute) {
              echo "<script>
              alert('data save successfully');
              </script>";
          }
          else{
              echo mysqli_error($conn);
          }
      } else {
          echo "<script>
              alert('Password Does not Match');
              </script>";
      }    
     
  }

?>
</body>
</html>