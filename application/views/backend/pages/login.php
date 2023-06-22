<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chain - Log in</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url();?>/assets/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url();?>/assets/backend/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
<div class="container ">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-9 col-md-6">
            <hr>
                <div class="card o-hidden border-0 shadow-lg my-6">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                           <div class="col-lg-6 d-none d-lg-block">
                        </div>
                            <div class="col-lg-12 ">
                                <div class="p-5">
                                    <div class="text-center">
                                    <a href="#" class="logo">
                                        <img src="<?=base_url();?>/assets/frontend/images/logo.png" alt="Chain App Dev">
                                    </a>
                                        <h1 class="h4 text-gray-900 mb-4"><br>Glad to have you back with us!</h1>
                                    </div>

                                    <form action="<?= base_url();?>index.php/admin" method="post" class="md-float-material">
                                    <hr/>
                                 <div class="row ">
                                    <div class="col-md-12 text-center">
                                        <label style="color: red;" ><?= $this->session->flashdata('msg_login');?></label>
                                    </div>
                                 </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                name="user_email"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Email Address" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="user_password"
                                                id="exampleInputPassword" 
                                                placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            
                                        </div>
                                        <div class="row m-t-30">
                                            <div class="col-md-12">
                                                <button type="submit" name="login_btn" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"> Login</button>
                                            </div>
                                        </div>
                                        <hr>
                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url();?>/assets/backend/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url();?>/assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url();?>/assets/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url();?>/assets/backend/js/sb-admin-2.min.js"></script>

</body>

</html>