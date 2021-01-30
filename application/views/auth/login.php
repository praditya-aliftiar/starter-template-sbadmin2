<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- my custom css -->
    <link href="<?= base_url('assets/') ?>css/custom.css" rel="stylesheet">

</head>

<body class="bg-light">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card o-hidden border-0 shadow-lg my-3">
                    <div class=" card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center mt-4">
                            <img src="<?= base_url('assets/') ?>img/login.svg" class="col-lg-7 d-none d-lg-block">
                        </div>

                        <div class="row">
                            <div class="col-lg-9 m-auto">
                                <div class="p-3">
                                    <div class="text-center">
                                        <h4 class="text-gray-900 mb-4">Login</h4>
                                    </div>
                                    <!-- menampilkan pesan flash data dari session -->
                                    <?= $this->session->flashdata('message') ?>

                                    <form class="user" autocomplete="off" method="post" action="<?= base_url('auth') ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Enter Username" value="<?= set_value('username') ?>">

                                            <?= form_error('username', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Enter Password" value="<?= set_value('password') ?>">
                                            <?= form_error('password', '<small class="text-danger">', '</small>') ?>

                                        </div>
                                        <!-- <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="remember_me" name="remember_me">
                                            <label class="form-check-label" for="remember_me">Remember me</label>
                                        </div> -->

                                        <button type="submit" class="btn btn-primary btn_login  btn-block mt-4 mb-3">LOGIN</button>

                                        <div class="text-center mb-4">
                                            <a href="<?= base_url('auth/registration') ?>">Don't have an account? REGISTER!</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- start sweet alert -->
    <?php if ($this->session->flashdata('regist-success')) : ?>
        <script>
            swal.fire({
                icon: "success",
                title: "Success!",
                text: "Registrasi berhasil, silahkan login!"
            })
        </script>
    <?php endif; ?>

    <?php if ($this->session->flashdata('login-failed-1')) : ?>
        <script>
            swal.fire({
                icon: "error",
                title: "Gagal!",
                text: "Login gagal, password salah!"
            })
        </script>
    <?php endif; ?>

    <?php if ($this->session->flashdata('login-failed-2')) : ?>
        <script>
            swal.fire({
                icon: "error",
                title: "Gagal!",
                text: "Login gagal, username salah!"
            })
        </script>
    <?php endif; ?>

    <?php if ($this->session->flashdata('logout-success')) : ?>
        <script>
            swal.fire({
                icon: "success",
                title: "Success!",
                text: "Anda telah logout!"
            })
        </script>
    <?php endif; ?>
    <!-- end sweet alert -->

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

</body>

</html>