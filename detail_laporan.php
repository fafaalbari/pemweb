<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Layanan Aduan Masyarakat</title>
</head>
<body>
    <?php
      require 'navbar.php';

    $nama_pelapor = $_POST['nama_pelapor'];
    $warga = $_POST['warga'];
    $no_hp = $_POST['no_hp'];
    $jenis_aduan = $_POST['jenis_aduan'];
    $tgl = $_POST['tgl'];
    $detail_aduan = $_POST['detail_aduan'];
    $tanggung_jawab = $_POST['tanggung_jawab'];
    $status = $_POST['status'];
    
    
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["lampiran"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    //check if there is a file or no
    if (empty($_FILES["lampiran"]["name"])) {
      $uploadOk = 0;
    } else {
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["lampiran"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["lampiran"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    
    //Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["lampiran"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["lampiran"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
  }    

    //menampilkan file yang sudah diupload
    //echo "<h2>File Anda</h2>";
    //echo "<img src='" . $target_file . "'>";
    //echo "<br><br>";
    //echo "<a href='" . $target_file . "' target='_blank'>Download File</a>";

    ?>

    <div class="container mt-5">
    <h2 align="center">Detail Laporan</h2>
    <table class="table">
        <tr>
          <td><label for="nama_pelapor" class="form-label">Nama Pelapor</label></td>
          <td><?php echo $nama_pelapor; ?></td>
        </tr>
        <tr>
          <td><label for="warga" class="form-label">Warga</label></td>
          <td><?php echo $warga; ?></td>
        </tr>
        <tr>
          <td><label for="nomor_hp" class="form-label">Nomor Telepon</label></td>
          <td><?php echo $no_hp; ?></td>
        </tr>
        <tr>
          <td><label for="jenis_pengaduan" class="form-label">Jenis/Kategori Laporan</label></td>
          <td><?php echo $jenis_aduan; ?></td>
        </tr>
        <tr>
          <td><label for="tgl" class="form-label">Tanggal Kejadian</label></td>
          <td><?php echo $tgl; ?></td>
        </tr>
        <tr>
          <td><label for="detail_pengaduan" class="form-label">Detail Laporan</label></td>
          <td><?php echo $detail_aduan; ?></td>
        </tr>
        <tr>
          <td><label for="lampiran" class="form-label">Lampiran (Opsional)</label></td>
          <td><img src="<?php echo $target_file; ?>" alt="Lampiran"></td>
        </tr>
        <tr>
          <td>saya bertanggung jawab atas laporan yang saya buat</td>
          <td><?php echo $tanggung_jawab; ?></td>
        </tr>
        <tr>
          <td>status</td>
          <td><?php echo $status; ?></td>
        </tr>
      </table>
    </div>
        <?php require 'footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>