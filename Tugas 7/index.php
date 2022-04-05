<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Services Report</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
    <div class="header-left">Costomer Service</div>
  </div>

  <div class="main">
    <div class="contact-form">
      <div class="form-title">Kontak</div>
      <form method="post" action="sent.php">
        <div class="form-item">Nama</div>
        <input type="text" name="name">

        <div class="form-item">Umur</div>
        <select name="age">
          <option value="pilih">Pilih</option>
          <?php 
            for ($i = 17; $i <= 25; $i++) {
              echo "<option value='{$i}'>{$i}</option>";
            } 
          ?>
        </select>

        <div class="form-item">Kategori</div>
        <?php 
          $types = array('Tentang Costumer', 'Komentar/Opini', 'Karier', 'Media', 'Pembayaran', 'Lainnya');
         ?>
        <select name="category">
          <option value="pilih">Alasan menghubungi kami</option>
          <?php
            foreach ($types as $type) {
              echo "<option value='{$type}'>{$type}</option>";
            }
          ?>
          
           </select>

        <div class="form-item">Pesan</div>
        <textarea name="body"></textarea>

        <input type="submit" value="Kirim">
      </form>
    </div>
  </div>
  </div>
</body>
</html>