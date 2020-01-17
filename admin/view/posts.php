<?php require admin_view('/static/header'); ?>
<!--content-->
<div class="content">

    <div class="box-">
        <h1>
            Postlar
            <?php if (permission('posts','add')):?>

                <a href="<?= admin_url('add_post') ?>">Yeni post </a>
            <?php endif; ?>
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>Post mövzusu</th>
                <th class="hide">Yayınlanma tarixi</th>
                <th>Əməliyyatlar</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($query as $post): ?>
            <tr>
                <td >
                    <?= $post['post_name'] ?>
                </td>
                <td class="hide" title="<?=$post['post_date'] ?>">
                    <?= timeConvert($post['post_date'] )?>
                </td>

                <td>
                    <?php if ( permission('posts', 'edit') ): ?>
                        <a href="edit_post?post_id=<?= $post['post_id'] ?>" class="btn">Dəyiş</a>
                    <?php endif; ?>
                    <?php if (permission('posts', 'delete')): ?>
                    <a onclick="return confirm('Silmək istədiyinizdən əminsiniz?')"
                       href="delete?table=posts&column=post_id&id=<?= $post['post_id'] ?>" class="btn">Sil</a>
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