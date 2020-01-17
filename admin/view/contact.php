<?php require admin_view('/static/header'); ?>
<!--content-->
<div class="content">

    <div class="box-">
        <h1>
            İstfadəçilər
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th></th>
                <th>Müştəri məlumatı</th>
                <th class="hide">Mövzu</th>
                <th class="hide">Tarix</th>
                <th class="hide">Oxunma tarixi</th>
                <th>Əməliyyatlar</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($query as $contact): ?>
            <tr>
                <td >
                        <?php if ($contact['contact_read_mark']==1): ?>
                    <div style="color: white; text-align: center; -webkit-border-radius: ;-moz-border-radius: ;border-radius: 10px;: ; padding: 5px; background: green;" class="mark">
                    <b>Oxundu</b>
                    </div>
                        <?php else: ?>
                            <div style="color: white; text-align: center; -webkit-border-radius: ;-moz-border-radius: ;border-radius: 10px;: ; padding: 5px; background: darkred;" class="mark">
                                <b>Oxunmadı</b>
                            </div>

                        <?php endif; ?>


                </td>
                <td>
                        <p><?= $contact['contact_name'] ?>-(<?= $contact['contact_email'] ?>)</p>
                    <?= $contact['contact_phone'] ?>
                </td>
                <td class="hide">
                    <?= $contact['contact_subject'] ?>
                </td>
                <td class="hide">
                    <?= $contact['contact_date'] ?> <br>(<?= timeConvert($contact['contact_date']) ?>)
                </td>
                <td class="hide">
                    <?php if ($contact['contact_read_mark']==1): ?>
                    <?= timeConvert($contact['contact_read_date']) ?> <br><?= $contact['contact_read_user'] ?> tərəfindən oxundu.
                    <?php else: ?>
                    Oxunmayıb
                    <?php endif; ?>
                </td>

                <td>
                    <?php if ( permission('users', 'edit') ): ?>
                        <a href="edit_contact?contact_id=<?= $contact['contact_id'] ?>" class="btn">Mesajı oxu</a>
                    <?php endif; ?>
                    <?php if (permission('users', 'delete')): ?>
                    <a onclick="return confirm('Silmək istədiyinizdən əminsiniz?')"
                       href="delete?table=contact&column=contact_id&id=<?= $contact['contact_id'] ?>" class="btn">Sil</a>
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