<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="<?= base_url() ?>/templates/css/login.css">

        <title>Login Page | Sintech</title>
    </head>

    <body>
        <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
            <div class="card card0 border-0">
                <div class="row d-flex">
                    <div class="col-lg-6">
                        <div class="card1 pb-5">
                            <!--<div class="row"> <img src="<?= base_url() ?>/templates/img/sintech.png" class="logo"> </div>-->
                            <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="<?= base_url() ?>/templates/img/login_image.png" class="image"> </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card2 card border-0 px-4 py-5">
                            <div class="row px-3 mb-4">
                                <div class="line"></div> 
                                <small class="or text-center">Sign In</small>
                                <div class="line"></div>
                            </div>
                            <?php $errors = session()->getFlashdata('errors'); if(!empty($errors)){ ?>
                            <div class="alert alert-danger" role="alert">
                                Ada kesalahan saat input data, yaitu:
                                <ul>
                                    <?php foreach ($errors as $error) { ?>
                                    <li><?php echo esc($error); ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <?php } ?>
                            <?php $error_login = session()->getFlashdata('error_login'); if(!empty($error_login)){ ?>
                            <div class="row">
                                <div class="col-md-12">
                                <div class="alert alert-danger text-center">
                                    <?php echo $error_login; ?>
                                </div>
                                </div>
                            </div>
                            <?php } ?>
                            <br>
                            <form action="<?= base_url('Auth/proses_login/'); ?>" method="post">
                                <?= csrf_field(); ?>
                                <div class="row px-3"> 
                                    <label class="mb-1">
                                        <h6 class="mb-0 text-sm">Nama Lengkap</h6>
                                    </label>
                                    <input class="mb-4" type="text" name="nama" placeholder="Tulis Nama Lengkap Anda" required> 
                                </div>
                                <div class="row px-3"> 
                                    <label class="mb-1">
                                        <h6 class="mb-0 text-sm">Kelas</h6>
                                    </label>
                                    <input class="mb-4" type="text" name="kelas" placeholder="Tulis Kelas Anda, contoh : X IPA 1" required> 
                                </div>
                                <div class="row px-3"> 
                                    <label class="mb-1">
                                        <h6 class="mb-0 text-sm">Token</h6>
                                    </label> 
                                    <input type="text" name="token" placeholder="Masukkan Nomer Token" required> 
                                </div>
                                <br>
                                <div class="row mb-3 px-3"> 
                                    <button type="submit" class="btn btn-blue text-center">Login</button> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="bg-blue py-4">
                    <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright Sintech &copy; 2020. All rights reserved.</small>
                        <!-- <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-envelope mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>