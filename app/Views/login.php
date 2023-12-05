<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" type="image/png" href="/smk1padang.ico">
    <title>SMKN 1 PADANG</title>
    <link href="<?php echo base_url('BackEnd/css/styles.css') ?>" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="" style="background-image: url('<?php echo base_url('/img/1.jpg'); ?>'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <!-- Elemen tambahan untuk efek blur -->
    <div class="bg-blur" style="position: fixed; top: 0; right: 0; bottom: 0; left: 0; backdrop-filter: blur(5px);"></div>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main class="container justify-content-center">
                <div class="container mt-5 ">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5" style="background-color: #E3F4F4;">
                                <div class="card-header text-center">
                                    <img src="<?php echo base_url('/img/smk1padang.png'); ?>" alt="Logo" style="width: 100px;"> <!-- Adjust the width as needed -->
                                    <h3 class="font-weight-light my-3">SMKN 1 PADANG</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <?php if (session()->getFlashdata('error')) { ?>
                                            <div class="alert alert-danger">
                                                <?php echo session()->getFlashdata('error') ?>
                                            </div>
                                        <?php } ?>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" value="<?php echo session()->getFlashdata('user_email') ?>" id="user_email" type="email" placeholder="name@example.com" />
                                            <label for="user_email">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="user_password" type="password" placeholder="Password" />
                                            <label for="user_password">Password</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.html">Forgot Password?</a>
                                            <input type="submit" name="login" class="btn btn-primary" value="Login" />
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <!-- <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div> -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('BackEnd/js/scripts.js') ?>"></script>
</body>

</html>