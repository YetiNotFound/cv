<?php
include 'config.php';

$result = mysqli_query($conn, "SELECT * FROM data_cv WHERE id=1"); // Sesuaikan dengan id CV
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <script src="script.js"></script>
    <title>Curriculum Vitae</title>
</head>

<body class="p-3">
  <nav class="navbar sticky-top bg-body-tertiary bg-danger">
    <div class="container-fluid justify-content-center">
      <h1 class= "text-uppercase font-weight-bold">Curriculum Vitae</h1>
    </div>
  </nav>
  <div class="card">
    <div class="p-3">
      <img src="<?php echo $data['foto_path']; ?>" alt="Foto Profil">
      <div class="card-body">
        <h3> <u class = "font-weight-bold">DATA PRIBADI</u></h3>
        <p class="card-title">NAMA: <?php echo $data['nama']; ?></p>
        <p class="card-text">ALAMAT: <?php echo $data['alamat']; ?></p>
        <p class="card-text">NO TELEPON: <?php echo $data['telepon']; ?></p>
        <p class="card-text">EMAIL: <?php echo $data['email']; ?></p>
        <p class="card-text">LINK GITHUB: <?php echo $data['web']; ?></p>
        <h3> <u class= "text-uppercase font-weight-bold">Pendidikan</u></h3>
        <p class="card-text">SMA: <?php echo $data['pendidikan']; ?></p>
        <h3> <u class= "text-uppercase font-weight-bold">Keterampilan</u></h3>
        <p class="card-text"><?php echo $data['keterampilan']; ?></p>
      </div>
    </div>
  </div>
  <!-- Tampilkan komentar -->
  <nav class="navbar sticky-top bg-body-tertiary color">
    <div class="container-fluid">
      <a class="navbar-brand font-weight-bold" href="admin.php">Update</a>
    </div>
  </nav>

</body>
</html>