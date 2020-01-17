<?php require admin_view('/static/header'); ?>
<!--content-->
<div class="content">

    <div class="box-">
        <h1>
            Referans artır
        </h1>
        <hr>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="tab" tab>
        <div class="tab-list" tab-list>
            <ul>
                <li><a href="#">Referanslar</a></li>
                <li><a href="#">SEO</a></li>
            </ul>
        </div>
        <div class="box-">
            <form action="" method="post" class="form label" enctype="multipart/form-data">
             <div class="tab-container">
                 <div tab-content>
                     <ul>
                         <li>
                             <label>Referans başlığı</label>
                             <div class="form-content">
                                 <input type="text" value="<?= post("reference_title"); ?>" name="reference_title">
                             </div>
                         </li>
                         <li>
                             <label>Referans açıqlaması</label>
                             <div class="form-content">
                                 <textarea  name="reference_content"  cols="30" rows="5"><?= post("reference_content"); ?></textarea>
                             </div>
                         </li>
                         <li>
                             <label>Referans kateqoriyası</label>
                             <div class="form-content">
                                 <select required name="reference_categories" >
                                     <option value="">-Kateqoriya seçin-</option>
                                     <?php foreach ($categories as $category): ?>
                                     <option value="<?=$category['category_id']?>"><?=$category['category_name']?></option>
                                     <?php endforeach; ?>
                                 </select>
                             </div>
                         </li>
                         <li>
                             <label>İstfadə olunan texnologiyalar</label>
                             <div class="form-content">
                                 <input class="tagsinput" name="reference_tags" value="<?= post("reference_tags"); ?>" >
                             </div>
                         </li>
                         <li>
                             <label>Referans Linki</label>
                             <div class="form-content">
                                 <input type="text" name="reference_demo" value="<?= post('reference_demo') ?>">
                             </div>
                         </li>
                         <li>
                             <label>İstfadə olunan şəkillər</label>
                             <label>İstfadə olunan şəkillər</label>
                             <div class="form-content">
                                 <input type="file" name="reference_image" value="<?= post("reference_image"); ?>" >
                             </div>
                         </li>
                     </ul>
                 </div>







                 <div tab-content>
                     <ul>
                         <li>
                             <label>Referans üçün SEO URL</label>
                             <div class="form-content">
                                 <input type="text" value="<?= post("reference_url"); ?>"
                                        name="reference_url">
                                 <p>*susmaya görə referansın adı götürüləcək</p>
                             </div>
                         </li>
                         <li>
                             <label>Səhifə üçün SEO title</label>
                             <div class="form-content">
                                 <input type="text"
                                        name="reference_seo[title]">
                             </div>
                         </li>
                         <li>
                             <label>Səhifə üçün SEO description</label>
                             <div class="form-content">
                            <textarea name="reference_seo[description]" cols="30" rows="5"></textarea>
                             </div>
                         </li>

                     </ul>
                 </div>
             </div>

                <ul>
                    <li class="submit">
                        <input type="hidden" name="submit" value="1">
                        <button type="submit">Əlavə et</button>
                        <br>
                        <br>
                    </li>
                </ul>
            </form>
        </div>

    </div>
</div>
<script>
    var tags=[]
</script>
<?php require admin_view('/static/footer'); ?>
