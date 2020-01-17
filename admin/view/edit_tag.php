<?php require admin_view('/static/header'); ?>
<!--content-->
<div class="content">
    <div class="box-">
        <h1>
            Etiketlərdə düzəliş et
        </h1>
        <hr>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="tab" tab>
        <div class="tab-list" tab-list>
            <ul>
                <li><a href="#">Etiket parametrləri</a></li>
                <li><a href="#">SEO</a></li>
            </ul>
        </div>
        <div class="box-">
            <form action="" method="post" class="form label">
             <div class="tab-container">
                 <div tab-content>
                     <ul>
                         <li>
                             <label ">Etiket adı</label>
                             <div class="form-content">
                                 <input type="text" value="<?= post("tag_name")?post("tag_name"):$query['tag_name']; ?>" name="tag_name">
                             </div>
                         </li>
                 </div>
                 <div tab-content>
                     <ul>
                         <li>
                             <label>Etiket üçün SEO URL</label>
                             <div class="form-content">
                                 <input type="text" value="<?= post("tag_url")?post("tag_url"):$query['tag_url']; ?>"
                                        name="tag_url">
                                 <p style="color: #cccccc;">*susmaya görə səhifənin adı götürüləcək</p>
                             </div>
                         </li>
                         <li>
                             <label>Etiket üçün SEO title</label>
                             <div class="form-content">
                                 <input type="text" value="<?= $seo['title']; ?>"
                                        name="tag_seo[title]">
                             </div>
                         </li>
                         <li>
                             <label>Etiket üçün SEO description</label>
                             <div class="form-content">
                            <textarea name="tag_seo[description]" cols="30" rows="5"><?= $seo['description']; ?></textarea>
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


<?php require admin_view('/static/footer'); ?>
