<?php require admin_view('/static/header'); ?>
<!--content-->
<div class="content">

    <div class="box-">
        <h1>
            Referanslar
            <?php if (permission('reference','add')):?>

                <a href="<?= admin_url('add_reference') ?>">Yeni referans </a>
            <?php endif; ?>
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>&nbsp;</th>
                <th>Referans mövzusu</th>
                <th>Referans kateqoriyası</th>
                <th class="hide">Yayınlanma tarixi</th>
                <th>Əməliyyatlar</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($query as $reference): ?>
            <tr>
                <td width="80">
                    <img height="80" src="<?=site_url('upload/reference/'.$reference['reference_url'].'/'.$reference['reference_image'])?>" alt="">
                </td>
                <td >
                    <?= $reference['reference_title'] ?>
                </td>
                <td >
                    <?= $reference['category_name'] ?>
                </td>
                <td class="hide" title="<?=$reference['reference_date'] ?>">
                    <?= timeConvert($reference['reference_date'] )?>
                </td>

                <td>
                    <?php if ( permission('reference', 'edit') ): ?>
                        <a href="edit_reference?reference_id=<?= $reference['reference_id'] ?>" class="btn">Dəyiş</a>
                    <?php endif; ?>
                    <?php if (permission('reference', 'delete')): ?>
                    <a onclick="return confirm('Silmək istədiyinizdən əminsiniz?')"
                       href="delete?table=reference&column=reference_id&id=<?= $reference['reference_id'] ?>" class="btn">Sil</a>
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