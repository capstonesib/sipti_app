<?php
include 'controller/koneksi.php';

  $email = "";
  $nama = "";

  if (isset($_POST['daftar'])) {
      $nama           = htmlspecialchars(ucwords($_POST['nama']));
      $email                  = htmlspecialchars(strtolower($_POST['email']));
      $password               = htmlspecialchars($_POST['pass']);
      $konfirmasi_password    = htmlspecialchars($_POST['c_pass']);
      $level = 1;

      if ($password != $konfirmasi_password) {
          echo "<script>alert('Password yang anda masukkan tidak sesuai!');
          window.location='pendaftaran.php';</script>";
      } else {
          if ($password == $konfirmasi_password) {
              $sql1 = "insert into user(nama, email, password, level) values ('$nama', '$email', md5('$password'), '$level')";
              $q1 = mysqli_query($conn, $sql1);
              if ($q1) {
                echo "<script>alert('Registrasi berhasil. Silahkan Login!');
                window.location='login.php';</script>";

                  $email          = "";
                  $nama   = "";
              } else {
                  echo "<script>alert('Akun gagal terdaftar');window.location='pendaftaran.php';</script>";
              }
          }
      }
  }
?>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../templet/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Register Sipti app</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../templet/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../templet/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../templet/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../templet/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../templet/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../templet/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../templet/assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="../templet/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../templet/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              
              <!-- /Logo -->
              <h4 class="mb-2 text-center">Pendaftran Akun</h4>

              <form id="formAuthentication" class="mb-3" action="" method="POST">
                <div class="mb-3">
                  <label for="username" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama lengkap anda" autofocus/>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" />
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="pass"
                      class="form-control"
                      name="pass"
                      placeholder="Masukkan password anda"
                      aria-describedby="password"
                      minlength="4"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Konfirmasi Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="c_pass"
                      class="form-control"
                      name="c_pass"
                      placeholder="Konfirmasi password anda"
                      aria-describedby="password"
                      minlength="4"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>

                <!-- <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                    <label class="form-check-label" for="terms-conditions">
                      I agree to
                      <a href="javascript:void(0);">privacy policy & terms</a>
                    </label>
                  </div>
                </div> -->
                <button class="btn btn-primary d-grid w-100" type="submit" name="daftar">Sign up</button>
              </form>

              <p class="text-center">
                <span>Anda Sudah Punya Akun</span>
                <a href="login.php">
                  <span>Silahkan Masuk</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../templet/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../templet/assets/vendor/libs/popper/popper.js"></script>
    <script src="../templet/assets/vendor/js/bootstrap.js"></script>
    <script src="../templet/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../templet/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../templet/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
