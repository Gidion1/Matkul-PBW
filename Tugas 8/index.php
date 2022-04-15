<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login Page</title>
  </head>
  <body>
    

    <div class="container">
      <div class="row mt-5">
          <div class="col-md-6 offset-4">
              <img src="#" alt="" width="70%">
          </div>
      </div>
      <div class="row">
          <div class="col-md-12 text-center">
              <h1 style="margin-bottom: 40px">Login Here 👋</h1>
          </div>
      </div>
      <div class="row d-flex justify-content-center">
          <div class="col-md-6">
              <form action="data.php" method="POST" style="border :0px solid;padding : 40px;border-radius: 20px;background-color: rgb(221, 184, 255);margin-bottom : 50px;">
                  <div class="mb-3">
                      <label for="name" class="form-label">Username</label>
                      <input type="text" class="form-control" id="name" name="name">
                  </div>
                  <div class="mb-3">
                      <label for="pw" class="form-label">Kode Akses</label>
                      <input type="password" class="form-control" name="pw" id="pw">
                  </div>
                  <button class="btn btn-success" name="submit" style="background-color: #5b00a5; border : none;margin-top: 20px">Simpan</button>
              </form>
             
          </div>
      </div>
    

    














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>