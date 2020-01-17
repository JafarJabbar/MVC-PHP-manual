<?php require admin_view('/static/header'); ?>
<!--content-->
<div class="content">

    <div class="box-">
        <h1>
            Müştəri mesajları
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>İstfadəçi adı</th>
                <th class="hide">E-Poçt</th>
                <th class="hide">Tarix</th>
                <th class="hide">Rank</th>
                <th>Əməliyyatlar</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($query as $user): ?>
            <tr>
                <td>
                    <a href="edit_user?user_id=<?= $user['user_id'] ?>" class="title">
                        <?= $user['username'] ?>
                    </a>
                </td>
                <td class="hide">
                    <?= $user['user_email'] ?>
                </td>
                <td class="hide">
                    <?= $user['user_time'] ?><br>( <?= timeConvert($user['user_time']) ?>)
                </td>
                <td class="hide">
                    <?= user_ranks($user['user_rank']) ?>
                </td>

                <td>
                    <?php if ( permission('users', 'edit') ): ?>
                        <a href="edit_user?user_id=<?= $user['user_id'] ?>" class="btn">Dəyiş</a>
                    <?php endif; ?>
                    <?php if (permission('users', 'delete')): ?>
                    <a onclick="return confirm('Silmək istədiyinizdən əminsiniz?')"
                       href="delete?table=users&column=user_id&id=<?= $user['user_id'] ?>" class="btn">Sil</a>
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