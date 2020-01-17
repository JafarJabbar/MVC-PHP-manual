<?php require admin_view('/static/header'); ?>
<!--content-->
<div class="content">

    <div class="box-">
        <h1>
            Settings
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-">
        <form action="" method="post" class="form label">
            <ul>
                <li>
                    <label for="title">İstfadəçi adı</label>
                    <div class="form-content">
                        <input value=<?= post('username') ? post('username') : $row['username'] ?> type="text"
                               name="username">
                    </div>
                </li>
                <li>
                    <label for="user_email">E-poçt</label>
                    <div class="form-content">
                        <input value="<?= post('user_email') ? post('user_email') : $row['user_email'] ?>" type="text"
                               name="user_email">
                    </div>
                </li>
                <li>
                    <label for="user_rank">Vəzifə</label>
                    <div class="form-content">
                        <select name="user_rank">
                            <option> -- Seçin --</option>
                            <?php foreach (user_ranks() as $id => $rank): ?>
                                <option <?= ($row['user_rank'] == $id) ? 'selected' : null ?>
                                        value="<?= $id ?>"><?= $rank ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </li>
                <li>
                    <label for="user_permission">İcazələr</label>
                    <div class="form-content">
                        <div class="permissions">
                        <?php foreach ($menus as $url => $menu): ?>
                                <h3><?= $menu['title'] ?></h3>
                                <div class="list">
                                <?php foreach ($menu['permissions'] as $key => $per): ?>
                                    <label>
                                        <input <?=(isset($permissions[$menu['url']][$key]) && ($permissions[$menu['url']][$key]==1))     ? 'checked':null ?> name="user_permissions[<?=$menu['url']?>][<?=$key?>]" value=1 type="checkbox">
                                        <?= $per ?>
                                    </label>
                                <?php endforeach; ?>
                                    </div>
                            <?php if (isset($menu['submenu'])): ?>
                                <div class="submenu_permissions">
                                    <?php foreach ($menu['submenu'] as $k => $submenu): if (!isset($submenu['permissions'])) continue; ?>
                                        <h3><?= $submenu['title'] ?></h3>
                                        <div class="list">
                                            <?php foreach ($submenu['permissions'] as $key => $per): ?>
                                                <label>
                                                    <input <?=(isset($permissions[$submenu['url']][$key]) && ($permissions[$submenu['url']][$key]==1))     ? 'checked':null ?> name="user_permissions[<?=$submenu['url']?>][<?=$key?>]" value=1 type="checkbox">
                                                    <?= $per ?>
                                                </label>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </li>

                <li class="submit">
                    <button value="1" name="submit">Yadda saxla</button>
                </li>
            </ul>
        </form>
    </div>
    <style>
        .permissions {
            border: 1px solid #cccccc;
            background: #ffffff;
            max-width: 400px;
            padding: 10px;

        }
        .list:last-child label{
            padding-bottom:0;
        }
        .list label{
            font-weight:normal!important;
            display: inline-block;
            width: auto!important;
            float: none!important;
            margin-right: 10px;
        }
        .list{
            padding-bottom:15px;
        }
        .permissions h3 {
            font-weight:bold;
        }
        .submenu_permissions{
            margin: 10px 0;
            margin-left: 10px;
            padding-left: 5px ;
            border-left: 4px solid #dddddd ;
        }
    </style>
    <?php require admin_view('/static/footer'); ?>
