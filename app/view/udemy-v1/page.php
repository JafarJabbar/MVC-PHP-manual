<?php require view('static/header') ?>
<section class="jumbotron text-center">
    <div class="container">
        <h1><?= $query['page_name'] ?></h1>
        <div class="breadcrumb-custom">
            <a href="<?= site_url() ?>">Anasayfa</a> /
            <a href="" class="active"><?= $query['page_name'] ?></a>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <?= htmlspecialchars_decode(strip_tags($query['page_content'])) ?>
        </div>

    </div>
</div>
<?php require view('static/footer') ?>
