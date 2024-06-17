<?php
// hubungkan dengan file koneksi.php
require_once('koneksi.php');

// cara cek adalah bila method request = POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // $id_film = $_POST['id_film'];
  $user_id = $_POST['user_id'];
  $nama_film = $_POST['nama_film'];
  $kategori_film = $_POST['kategori_film'];
  $rating = $_POST['rating'];
  $status = $_POST['status'];

  // berikut ngeprint variable
  // var_dump($email);
  // die();

  //menambah data baru
  $sql = "INSERT INTO table_film (
    user_id,
    nama_film,
    kategori_film,
    rating,
    status
  ) VALUES (
    '$user_id',
    '$nama_film',
    '$kategori_film',
    '$rating',
    '$status'
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
<form action="form_tambah_film.php" method="POST">
    <label for="exampleFormControlInput1" class="form-label">user_id</label>
        <input type="number" name="user_id" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <label for="exampleFormControlInput1" class="form-label">nama_film</label>
        <input type="text" name="nama_film" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <label for="exampleFormControlInput1" class="form-label">kategori_film</label>
        <input type="text" name="kategori_film" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <label for="exampleFormControlInput1" class="form-label">rating</label>
        <input type="number" name="rating" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    </div>
    <label for="exampleFormControlInput1" class="form-label">status</label>
        <input type="text" name="status" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>