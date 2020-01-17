<?php require admin_view('/static/header'); ?>
<!--content-->
<div class="content">

    <div class="box-">
        <h1>
            Səhifələr
            <?php if (permission('pages','add')):?>

                <a href="<?= admin_url('add_page') ?>">Yeni səhifə </a>
            <?php endif; ?>
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>Səhifənin başlığı</th>
                <th class="hide">Yayımlanma tarixi</th>
                <th>Əməliyyatlar</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($query as $page): ?>
            <tr>
                <td >
                    <?= $page['page_name'] ?>
                </td>
                <td class="hide" title="<?=$page['page_date'] ?>">
                    <?= timeConvert($page['page_date'] )?>
                </td>

                <td>
                    <a href="<?= site_url('page/'.$page['page_url'])?>" class="btn">Səhifəyə get</a>
                    <?php if ( permission('pages', 'edit') ): ?>
                        <a href="edit_page?page_id=<?= $page['page_id'] ?>" class="btn">Dəyiş</a>
                    <?php endif; ?>
                    <?php if (permission('pages', 'delete')): ?>
                    <a onclick="return confirm('Silmək istədiyinizdən əminsiniz?')"
                       href="delete?table=pages&column=page_id&id=<?= $page['page_id'] ?>" class="btn">Sil</a>
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