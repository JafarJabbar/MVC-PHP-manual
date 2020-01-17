<?php require admin_view('/static/header'); ?>
<!--login screen-->
<div class="login-screen">

    <!--login logo-->
    <div class="login-logo">
        <a href="#">
            <img src=<?= admin_public_url("images/logo.png") ?> alt="">
        </a>
    </div>
    <?php if ($err=error()): ?>
        <div class="message error box-">
            <?= $err ?>
        </div>

    <?php endif; ?>
    <form action="" method="post">

        <ul>

            <li>
                <label for="username">İstfadəçi adınız</label>
                <input type="text" name="username">
            </li>
            <li>
                <label for="password">Şifrəniz</label>
                <input type="password" name="password">
            </li>
            <li>
                <button name="submit" value=1 type="submit">Giriş</button>

            </li>
        </ul>
    </form>



</div>

<?php require admin_view('/static/footer'); ?>
