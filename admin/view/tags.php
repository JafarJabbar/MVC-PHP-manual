<?php require admin_view('/static/header'); ?>
<!--content-->
<div class="content">

    <div class="box-">
        <h1>
            Etiketlər
            <?php if (permission('tags','add')):?>

                <a href="<?= admin_url('add_tag') ?>">Yeni etiket </a>
            <?php endif; ?>
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>Etiketin adı</th>
                <th >İşlənmə sayı</th>
                <th>Əməliyyatlar</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($row as $page): ?>
            <tr>
                <td >
                    <?= $page['tag_name'] ?>
                </td>
                <td>
                    <?= $page['total'] ?>
                </td>

                <td>
                    <?php if ( permission('tags', 'edit') ): ?>
                        <a href="edit_tag?tag_id=<?= $page['tag_id'] ?>" class="btn">Dəyiş</a>
                    <?php endif; ?>
                    <?php if (permission('tags', 'delete')): ?>
                    <a onclick="return confirm('Silmək istədiyinizdən əminsiniz?')"
                       href="delete?table=tags&column=tag_id&id=<?= $page['tag_id'] ?>" class="btn">Sil</a>
                    <?php endif; ?>
                </td>

            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php if ( $totalRecord > $pageLimit ): ?>
        <div class="pagination">
            <ul>

            </ul>
        </div>
    <?php endif; ?>
    <?php require admin_view('/static/footer'); ?>
</div>