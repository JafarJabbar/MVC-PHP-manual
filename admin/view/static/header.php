<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <meta charset="UTF-8">
    <title>Document</title>

    <!--styles-->
    <link rel="stylesheet" href="<?= admin_public_url('styles/main.css?v=' . time()) ?>">
    <link rel="stylesheet" href="<?= admin_public_url('styles/add.css?v=' . time()) ?>">

    <!--scripts-->
    <script src="<?= admin_public_url('scripts/jquery-1.12.2.min.js') ?>"></script>
    <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.js" referrerpolicy="origin"></script>
    <script src="<?=admin_public_url('vendor/jqueryTagsInput/jquery.tagsinput-revisited.min.js')?>"></script>
    <link rel="stylesheet" href="<?=admin_public_url('vendor/jqueryTagsInput/jquery.tagsinput-revisited.min.css')?>">
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!--    <script src="https://cdn.ckeditor.com/4.5.7/basic/ckeditor.js"></script>-->
    <script>
        var api_url="<?=admin_url('api')?>",
            app_url="<?=site_url('app')?>";
    </script>
    <script src="<?= admin_public_url('scripts/admin.js') ?>"></script>
    <script src="<?= admin_public_url('scripts/api.js') ?>"></script>

</head>
<body>
<?php if (session('user_rank') && session('user_rank')!=3): ?>
<!--navbar-->

<div class="navbar">
    <ul dropdown>
        <li>
            <a href="<?=site_url()?>">
                <span class="fa fa-home"></span>
                <span class="title">
                <?=setting('title') ?>
        </span>
            </a>
        </li>
        <li>
            <a href="<?= admin_url('log_out') ?>">
                Çıxış
            </a>
        </li>
<!--        <li>-->
<!--            <a href="#">-->
<!--                <span class="fa fa-comment"></span>-->
<!--                1-->
<!--            </a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <span class="fa fa-plus"></span>-->
<!--                <span class="title">New</span>-->
<!--            </a>-->
<!--            <ul>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--                        New Post-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--                        New Page-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--                        New Category-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </li>-->
    </ul>
</div>
<?php if ($error=error()): ?>
        <div class="message error box-">
            <?= $error;?>

        </div>

    <?php endif; ?>
<!--sidebar-->
<div class="sidebar">

    <ul>

        <?php foreach($menus as $mainUrl=>$menu):?>
        <li class="<?= (route(1)==$menu['url'] || (isset($menu['submenu']) && array_search(route(1), array_column($menu['submenu'], 'url')) !== false)) ? ('active') : (null); ?>">
            <a href="<?= $menu['url'] ?>">
                <span class="fa fa-<?= $menu['icon'] ?>"></span>
                <span class="title">
                    <?= $menu['title'] ?>
                </span>
            </a>
            <?php if (isset($menu['submenu'])): ?>
                <ul class="sub-menu">
                    <?php foreach($menu['submenu'] as $k=>$submenu): ?>
                        <li class="<?=route(1)==$submenu['url']?'active':null?>" >
                            <a href="<?= $submenu['url'] ?>">
                                <?= $submenu['title'] ?>
                            </a>
                        </li>
                    <?php endforeach;  ?>
                </ul>
            <?php  endif; ?>
        </li>
        <?php endforeach; ?>
        <li class="line">
            <span></span>
        </li>
    </ul>
    <a href="#" class="collapse-menu">
        <span class="fa fa-arrow-circle-left"></span>
        <span class="title">
            Menyunu bağla
        </span>
    </a>

</div>
<?php endif; ?>


