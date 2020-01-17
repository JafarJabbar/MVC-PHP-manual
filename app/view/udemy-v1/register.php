<?php require view('static/header')?>
<div class="row justify-content-md-center mt-4">

    <div class="col-md-4">
        <form action="" method="post">
            <h3 class="mb-3">Qeydiyyat</h3>

            <?php if ($err=error()): ?>
            <div class="alert alert-danger" role="alert">
                <?= $err; ?>
            </div>
            <?php endif; ?>
            <?php if ($success=success()): ?>
                <div class="alert alert-success" role="alert">
                    <?= $success; ?>
                </div>
            <?php endif; ?>


            <div class="form-group">
                <label for="username">İstfadəçi adınız</label>
                <input type="text" name="username" value="<?= post('username') ?>" class="form-control" placeholder="İstfadəçi adınızı yazın..">
            </div>
            <div class="form-group">
                <label for="email">E-mailiniz</label>
                <input type="text" class="form-control" value="<?= post('email') ?>" name="email" placeholder="E-mail adresinizi yazın..">
            </div>
            <div class="form-group">
                <label for="password">Şifrə</label>
                <input type="password" class="form-control" name="password" placeholder="*******">
            </div>
            <div class="form-group">
                <label for="password-again">Təkrar şifrəniz</label>
                <input type="password" class="form-control" name="password_again" placeholder="*******">
            </div>
            <input type="hidden" name="submit" value=1>
            <button type="submit" class="btn btn-primary">Qeydiyyatdan keç</button>
        </form>
    </div>
<?php require view('static/footer')?>
