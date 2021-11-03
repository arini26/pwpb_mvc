<?php
class User extends Controller {
    public function index() {
      $this->view(“user/index”);
    }
    public function profile($nama = “Linux”, $pekerjaan = “Devs”) {
      $data[“nama”] = $nama;
      $data[“pekerjaan”] = $pekerjaan;
      $this->view(“user/profile”, $data);
    }
  }
?>

<!DOCTYPE html>
<html lang=”en”>

 <head>
   <meta charset=”UTF-8">
   <meta name=”viewport” content=”width=device-width, initial- scale=1.0">
   <meta http-equiv=”X-UA-Compatible” content=”ie=edge”>
   <title>Halaman <?= $data[‘judul’]; ?></title>
 </head>

 <body>
   <h1>Halaman User</h1>
 </body>

</html>