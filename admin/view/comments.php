<?php require admin_view('/static/header'); ?>
<!--content-->
<div class="content">

    <div class="box-">
        <h1>
            Şərhlər
        </h1>
    </div>

    <div class="filter">
        <ul>
            <li class="<?= !(get('status') )?  'active': null ?>"><a href="<?=admin_url('comments')?>">Hamısı</a></li>
            <li class="<?=get('status')==1 ? 'active': null ?>"><a  href="<?=admin_url('comments?status=1')?>">Təsdiqlənənlər</a></li>
            <li class="<?=get('status')==2 ? 'active': null ?>"><a  href="<?=admin_url('comments?status=2')?>">Təsdiqlənməyənlər</a></li>
        </ul>
    </div>

    <div class="table">
        <table>
            <thead>
            <tr >
                <th ></th>
                <th style="text-align: center!important;">İstfadəçi</th>
                <th style="text-align: center!important;" class="hide">Şərh</th>
                <th style="text-align: center!important;">Postun mövzusu</th>
                <th style="text-align: center!important;">Rəyin statusu</th>
                <th style="text-align: center!important;" class="hide">Yayınlanma tarixi</th>
                <th style="text-align: center!important;">Əməliyyatlar</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($query as $post): ?>
            <tr style="text-align: center">
                <td>
                    <img  style=" height: 40px; border-radius: 50%;" src="<?=get_gravatar($post['comment_email'])?>" alt="">
                </td>
                <td >
                    <?= $post['comment_name'] ?><br>
                    (<?= $post['comment_email'] ?>)
                </td>
                <td  class="hide">
                    <?= $post['comment_content'] ?>
                </td>
                <td>
                    <a target="_blank" href="<?=site_url('blog/'.$post['post_url']) ?>"><?= $post['post_name'] ?></a>
                </td>
                <td>
                    <?php if ($post['comment_status']==0): ?>
                    <div class="status" style="padding: 5px; height: 20px; color: #ffffff; background: darkred; -webkit-border-radius: ;-moz-border-radius: ;border-radius: 10px;"> Təsdiqlənməyib </div>
                    <?php elseif($post['comment_status']==1): ?>
                    <div class="status" style="padding: 5px; height: 20px; color: #ffffff; background: green; -webkit-border-radius: ;-moz-border-radius: ;border-radius: 10px;"> Təsdiqlənib </div>
                    <?php endif; ?>
                </td>
                <td class="hide" title="<?=$post['comment_date'] ?>">
                    <?= timeConvert($post['comment_date'] )?>
                </td>

                <td>
                    <?php if ( permission('comments', 'edit') ): ?>
                        <a href="edit_comment?comment_id=<?= $post['comment_id'] ?>" class="btn">Dəyiş</a>
                    <?php endif; ?>
                    <?php if (permission('comments', 'delete')): ?>
                    <a onclick="return confirm('Silmək istədiyinizdən əminsiniz?')"
                       href="delete?table=comments&column=comment_id&id=<?= $post['comment_id'] ?>" class="btn">Sil</a>
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
                 <?=$db->showPagination(admin_url(route(1).'?'.$pageParam.'=[page]&status='.get('status')))?>
            </ul>
        </div>
    <?php endif; ?>
    <?php require admin_view('/static/footer'); ?>
</div>