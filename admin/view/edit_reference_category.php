<?php require admin_view('/static/header'); ?>
<!--content-->
<div class="content">

    <div class="box-">
        <h1>
            Reference kateqoriyalarını düzəlt
        </h1>
        <hr>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="tab" tab>
        <div class="tab-list" tab-list>
            <ul>
                <li><a href="#">Ümumi</a></li>
                <li><a href="#">Maintance mode</a></li>
            </ul>
        </div>
        <div class="box-">
            <form action="" method="post" class="form label">
             <div class="tab-container">
                 <div tab-content>
                     <ul>
                         <li>
                             <label ">Reference kateqoriya adı</label>
                             <div class="form-content">
                                 <input type="text" value="<?= post("category_name")? post("category_name"): $query['category_name'] ; ?>" name="category_name">
                             </div>
                         </li>
                 </div>
                 <div tab-content>
                     <ul>
                         <li>
                             <label>Reference katqoriya üçün SEO URL</label>
                             <div class="form-content">
                                 <input type="text" value="<?= post("category_name")? post("category_url"): $query['category_url']; ?>"
                                        name="category_url">
                                 <p style="color: #cccccc;">*susmaya görə kateqoriyanın adı götürüləcək</p>
                             </div>
                         </li>
                         <?php  $category_seo=json_decode($query['category_seo'],true);
                         ?>
                         <li>
                             <label>Reference katqoriya üçün SEO title</label>
                             <div class="form-content">
                                 <input type="text" value="<?= $category_seo['title']; ?>"
                                        name="category_seo[title]">
                             </div>
                         </li>
                         <li>
                             <label>Reference <k></k>atqoriya üçün SEO description</label>
                             <div class="form-content">
                            <textarea name="category_seo[description]" cols="30"
                                      rows="5"><?= $category_seo['title']; ?></textarea>
                             </div>
                         </li>

                     </ul>
                 </div>
             </div>
                <ul>
                    <li class="submit">
                        <input type="hidden" name="submit" value="1">
                        <button type="submit">Yadda saxla</button>
                        <br>
                        <br>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>



<?php require admin_view('/static/footer'); ?>
