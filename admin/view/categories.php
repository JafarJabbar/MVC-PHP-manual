<?php require admin_view('/static/header'); ?>
<!--content-->
<div class="content">

    <div class="box-">
        <h1>
            Müştəri mesajları
            <?php if (permission('categories','add')):?>

                <a  href="<?= admin_url('add_category') ?>">Yeni kateqoriya </a>
            <?php endif; ?>
        </h1>

    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>Kateqoriya adı</th>
                <th class="hide">Tarix</th>
                <th>Əməliyyatlar</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($query as $category): ?>
            <tr>
                <td>
                    <a href="edit_category?category_id=<?= $category['category_id'] ?>" class="title">
                        <?= $category['category_name'] ?>
                    </a>
                </td>
                <td class="hide">
                    <?= $category['category_date'] ?><br>( <?= timeConvert($category['category_date']) ?>)
                </td>
                <td>
                    <?php if ( permission('users', 'edit') ): ?>
                        <a href="edit_category?category_id=<?= $category['category_id'] ?>" class="btn">Dəyiş</a>
                    <?php endif; ?>
                    <?php if (permission('users', 'delete')): ?>
                    <a onclick="return confirm('Silmək istədiyinizdən əminsiniz?')"
                       href="delete?table=categories&column=category_id&id=<?= $category['category_id'] ?>" class="btn">Sil</a>
                    <?php endif; ?>
                </td>

            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <?php require admin_view('/static/footer'); ?>
</div>