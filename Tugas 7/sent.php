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
    <div class="thanks-message">Terima kasih telah menghubungi kami!</div>
    <div class="display-contact">
      <div class="form-title">Terkirim</div>

      <div class="form-item">■ Nama</div>
      <?php echo $_POST['name']; ?>

      <div class="form-item">■ Umur</div>
      <?php echo $_POST['age']; ?>

      <div class="form-item">■ Kategori</div>
      <?php echo $_POST['category']; ?>

      <div class="form-item">■ Pesan</div>
      <?php echo $_POST['body']; ?>
    </div>
  </div>

  </div>
</body>
</html>