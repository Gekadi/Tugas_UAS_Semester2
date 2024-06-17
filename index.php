<?php
// hubungkan dengan file koneksi.php
require_once('koneksi.php');

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Debugging code (commented out for production)
  // var_dump($email);
  // die();

  // Prepare the SQL statement
  $stmt = $mysqli->prepare("SELECT * FROM login WHERE email = '$email'");
  if ($stmt) {
      // Bind the email parameter to the statement
      $stmt->bind_param('s', $email);

      // Execute the statement
      $stmt->execute();

      // Get the result
      $result = $stmt->get_result();

      // Fetch the user data
      if ($user = $result->fetch_assoc()) {
          // Verify the password (assuming password hashing)
          if (password_verify($password, $user['password'])) {
              // Password is correct, handle successful login
              echo 'berhasil login!';
          } else {
              // Incorrect password
              echo 'Invalid email or password.';
          }
      } else {
          // User not found
          echo 'Invalid email or password.';
      }

      // Close the statement
      $stmt->close();
  } else {
      // Error preparing the statement
      echo 'Database error: ' . $mysqli->error;
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<form action="login.php" method="POST">
<label
  for="exampleFormControlInput1" class="form-label">Nama</label>
  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<label for="exampleFormControlInput1" class="form-label">Password</label>
  <input type="text" name="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<button type="submit" class="btn btn-primary">Kirim</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>