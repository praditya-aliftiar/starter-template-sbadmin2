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
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class=" card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify justify-content-center">
                            <img src="<?= base_url('assets/') ?>img/registration.svg" class="col-lg-7 d-none d-lg-block mt-3">

                            <div class="col-lg-10">
                                <div class="p-3">
                                    <h1 class="h4 text-gray-900 mb-4 text-center">Registration</h1>

                                    <form class="user" autocomplete="off" method="post" action="<?= base_url('auth/registration') ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama') ?>">

                                            <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value('username') ?>">

                                            <?= form_error('username', '<small class="text-danger">', '</small>') ?>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password" value="<?= set_value('password1') ?>">

                                                <?= form_error('password1', '<small class="text-danger">', '</small>') ?>
                                            </div>

                                            <div class="col-sm-6">
                                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder=" Repeat Password" value="<?= set_value('password2') ?>">
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary  btn_register btn-block mt-3">REGISTER</button>
                                    </form>
                                    <div class="text-center mt-3">
                                        <p><a href="<?= base_url('auth') ?>">Already have account? LOGIN!</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

</body>

</html>