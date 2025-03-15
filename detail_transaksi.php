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
      $nama_jasa = $_POST['nama_jasa'];
      $nama_pelapor = $_POST['nama_pelapor'];
      $alamat = $_POST['alamat'];
      $no_hp = $_POST['no_hp'];
      $tanggal = $_POST['tanggal'];
      $metode_pembayaran = $_POST['metode_pembayaran'];

        ?>


<div class="container mt-5">
    <h2 align="center">Detail Transaksi</h2>
    <table class="table">
        <tr>
          <td><label for="nama_jasa" class="form-label">Nama Jasa</label></td>
          <td><?php echo $nama_jasa; ?></td>
        </tr>
        <tr>
          <td><label for="warga" class="form-label">nama</label></td>
          <td><?php echo $nama_pelapor; ?></td>
        </tr>
        <tr>
          <td><label for="nomor_hp" class="form-label">Nomor Telepon</label></td>
          <td><?php echo $no_hp; ?></td>
        </tr>
        <tr>
          <td><label for="jenis_pengaduan" class="form-label">Alamat</label></td>
          <td><?php echo $alamat; ?></td>
        </tr>
        <tr>
          <td><label for="tgl" class="form-label">Tanggal Layanan</label></td>
          <td><?php echo $tanggal; ?></td>
        </tr>
        <tr>
          <td><label for="detail_pengaduan" class="form-label">Metode pembayaran</label></td>
          <td><?php echo $metode_pembayaran; ?></td>
        </tr>
      </table>
    </div>
    <?php require 'footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>