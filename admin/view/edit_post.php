<?php require admin_view('/static/header'); ?>
<!--content-->
<div class="content">

    <div class="box-">
        <h1>
            Postu dəyiş
        </h1>
        <hr>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="tab" tab>
        <div class="tab-list" tab-list>
            <ul>
                <li><a href="#">Post</a></li>
                <li><a href="#">SEO</a></li>
            </ul>
        </div>
        <div class="box-">
            <form action="" method="post" class="form label">
             <div class="tab-container">
                 <div tab-content>
                     <ul>
                         <li>
                             <label ">Post mövzusu</label>
                             <div class="form-content">
                                 <input type="text" value="<?= post("post_name")?post("post_name"): $query['post_name']; ?>" name="post_name">
                             </div>
                         </li>
                         <li>
                             <label>Postun qısa contenti</label>
                             <div class="form-content">
                                 <textarea  name="post_short_content" class="editor_short" cols="30" rows="5"><?= post("post_short_content")?post("post_short_content"): $query['post_short_content']; ?></textarea>
                             </div>
                         </li>
                         <li>
                             <label>Post contenti</label>
                             <div class="form-content">
                                <textarea  name="post_content" class="editor" cols="30" rows="5"><?= post("post_content")?post("post_content"): $query['post_content']; ?></textarea>
                             </div>
                         </li>
                         <li>
                             <label ">Post statusu</label>
                             <div class="form-content">
                                 <select required name="post_status" >
                                     <option <?=(post('post_status')?post('post_status'):$query['post_status'])==1 ? 'selected':null ?> value="1">Yayımlanıb</option>
                                     <option <?=(post('post_status')?post('post_status'):$query['post_status'])==2 ? 'selected':null ?> value="2">Yayımlanmayıb</option>
                                 </select>
                             </div>
                         </li>
                         <li>
                             <label ">Post kateqoriyası</label>
                             <div class="form-content">
                                 <select required name="post_categories" >
                                     <?php foreach ($categories as $category): ?>
                                     <option <?=(in_array($category['category_id'],explode(',',$query['post_categories'])))? 'selected':null ?> value="<?=$category['category_id']?>"><?=$category['category_name']?></option>
                                     <?php endforeach; ?>
                                 </select>
                             </div>
                         </li>
                         <li>
                             <label>Post etiketləri</label>
                             <div class="form-content">
                                 <input name="post_tags" class="tagsinput"
                                  value="<?=post('post_tags')?post('post_tags'):implode(",",$tagPost);?> ">

                                 <p>
                                     Etiketləri alt-alta yazmağınız xahiş olunur...
                                 </p>
                             </div>
                         </li>
                     </ul>
                 </div>
                 <div tab-content>
                     <ul>
                         <li>
                             <label>Post üçün SEO URL</label>
                             <div class="form-content">
                                 <input type="text" value="<?= post("post_url")?post("post_url"): $query['post_url']; ?>"
                                        name="post_url">
                                 <p>*susmaya görə səhifənin adı götürüləcək</p>
                             </div>
                         </li>
                         <li>
                             <label>Səhifə üçün SEO title</label>
                             <div class="form-content">
                                 <input type="text" value="<?=$seo['title']?>"
                                        name="post_seo[title]">
                             </div>
                         </li>
                         <li>
                             <label>Səhifə üçün SEO description</label>
                             <div class="form-content">
                            <textarea name="post_seo[description]" cols="30" rows="5"><?=$seo['description']?></textarea>
                             </div>
                         </li>

                     </ul>
                 </div>
             </div>

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
<script>
    var tags=['<?=implode("','",$tagArr)?>']
</script>

<?php require admin_view('/static/footer'); ?>
