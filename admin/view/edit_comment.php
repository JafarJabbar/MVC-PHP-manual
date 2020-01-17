<?php require admin_view('/static/header'); ?>
<!--content-->
<div class="content">

    <div class="box-">
        <h1>
            Rəylərdə düzəlişlər et
        </h1>
        <hr>
    </div>
    <div class="info" style="background: #00a0d2; border: 2px solid #008EC2; padding: 10px;">
        <p style="color: #ffffff;"><strong><a target="_blank" style="color: #ffffff;" href="<?=site_url("blog/".$row['post_url'])?>"><?=$row['post_name']?></a></strong> adlı mövzuya <?=timeConvert($row['comment_date'])?>
            <a target="_blank" href=""style="color: #ffffff;"><strong><?=$row['comment_name']?></a></strong> tərəfindən bildirilmiş rəy </p>
    </div>

    <div class="clear" style="height: 10px;"></div>
        <div class="box-">
            <form action="" method="post" class="form label">

                     <ul>
                         <li>
                             <label>Rəy bildirənin adı</label>
                             <div class="form-content">
                                 <input type="text" value="<?= post("comment_name")? post("comment_name"):$row['comment_name']; ?>"
                                        name="comment_name">
                             </div>
                         </li>
                         <li>
                             <label>Rəy bildirənin emaili</label>
                             <div class="form-content">
                                 <input type="text" value="<?= post("comment_email")? post("comment_email"):$row['comment_email']; ?>"
                                        name="comment_email">
                             </div>
                         </li>
                         <li>
                             <label>Status</label>
                             <div class="form-content">
                                 <select name="comment_status" >
                                     <option value=1 <?=$row['comment_status']==1? 'selected':null?> >Təsdiqlənib</option>
                                     <option value=0 <?=$row['comment_status']==0? 'selected':null?> >Təsdiqlənməyib</option>
                                 </select>
                             </div>

                         </li>
                         <li>
                             <label>Rəy</label>
                             <div class="form-content">
                            <textarea name="comment_content" cols="30" rows="5"><?= post("comment_content")? post("comment_content"):$row['comment_content']; ?></textarea>
                             </div>
                         </li>
                     </ul>

                <ul>
                    <li class="submit">
                        <input type="hidden" name="submit" value="1">
                        <button type="submit">Dəyiş</button>
                        <br>
                        <br>
                    </li>
                </ul>
            </form>
        </div>

    </div>
</div>


<?php require admin_view('/static/footer'); ?>
