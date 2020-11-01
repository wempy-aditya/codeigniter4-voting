<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login admin</title>
</head>
<body>
    <h1>login admin</h1>
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
    <form action="<?= base_url('Admin/login/'); ?>" method="post">
    <?= csrf_field(); ?>
        <input type="hidden" name="username" value="admin">
        <label for="password"></label>
        <input type="text" name="password" placeholder="input password" required>
        <button type="submit" class="btn btn-blue text-center">Login</button> 
    </form>
</body>
</html>