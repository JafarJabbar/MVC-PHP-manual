
<?php require admin_view('/static/header'); ?>
<!--content-->
<div class="content">

    <div class="box-">
        <h1>
            Menyu parametrləri
            <?php if (permission('menu','add')):?>

            <a href="<?= admin_url('add_menu') ?>">Yeni menyu </a>
            <?php endif; ?>

        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>Menyu adı</th>
                 <th class="hide">Yaranma tarixi</th>
                <th class="hide">Əməliyyatlar</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($rows as $row): ?>
            <tr>

                <td class="hide">
                    <a href="#"><?= $row['menu_title'] ?></a>
                </td>

                <td>
                    <span class="date"><?= $row['menu_date'] ?><br>(<?= timeConvert($row['menu_date'] )?>)</span>
                </td>
                <td>
                <?php if (permission('menu','edit')):?>
                    <a class="btn" href="<?= admin_url('edit_menu?id='.$row['menu_id']) ?>">Dəyiş </a>
                <?php endif; ?>

                    <?php if (permission('menu','delete')):?>
                    <a class="btn" onclick="return confirm('Silmək istədiyinizdən əminsiniz?')" href="<?= admin_url('delete?table=menus&column=menu_id&id='.$row['menu_id']) ?>">Sil </a>
                    <?php endif; ?>

                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php require admin_view('/static/footer'); ?>

