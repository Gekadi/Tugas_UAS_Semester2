<?php
// hubungkan dengan file koneksi.php
require_once('koneksi.php');

// cara cek adalah bila method request = POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $password = $_POST['password'];
  $email = $_POST['email'];

  // berikut ngeprint variable
  // var_dump($email);
  // die();

  //menambah data baru
  $sql = "INSERT INTO login (
    password, 
    email
  ) VALUES (
    '$password', 
    '$email'
  )";


  if (mysqli_query($mysqli, $sql)) {
    echo "Sukses!";
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
<form action="register.php" method="POST">
  <div class="mb-3">
    <label
    for="exampleFormControlInput1" class="form-label">Nama</label>
    <input type="email" name="email"  class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <label for="exampleFormControlInput1" class="form-label">Password</label>
    <input type="text" name="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <button type="submit" class="btn btn-primary">Kirim</button>
</form>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>