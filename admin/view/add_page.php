<?php require admin_view('/static/header'); ?>
<!--content-->
<div class="content">

    <div class="box-">
        <h1>
            Səhifə əlavə et
        </h1>
        <hr>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="tab" tab>
        <div class="tab-list" tab-list>
            <ul>
                <li><a href="#">Səhifə parametrləri</a></li>
                <li><a href="#">SEO</a></li>
            </ul>
        </div>
        <div class="box-">
            <form action="" method="post" class="form label">
             <div class="tab-container">
                 <div tab-content>
                     <ul>
                         <li>
                             <label ">Səhifə title</label>
                             <div class="form-content">
                                 <input type="text" value="<?= post("page_name"); ?>" name="page_name">
                             </div>
                         </li>
                         <li>
                             <label>Səhifə contenti</label>
                             <div class="form-content">
                                <textarea  name="page_content" class="editor" cols="30" rows="5"><?= post("page_name"); ?>"</textarea>
                             </div>
                         </li>

                 </div>
                 <div tab-content>
                     <ul>
                         <li>
                             <label>Səhifə üçün SEO URL</label>
                             <div class="form-content">
                                 <input type="text" value="<?= post("page_url"); ?>"
                                        name="page_url">
                                 <p style="color: #cccccc;">*susmaya görə səhifənin adı götürüləcək</p>
                             </div>
                         </li>
                         <li>
                             <label>Səhifə üçün SEO title</label>
                             <div class="form-content">
                                 <input type="text"
                                        name="page_seo[title]">
                             </div>
                         </li>
                         <li>
                             <label>Səhifə üçün SEO description</label>
                             <div class="form-content">
                            <textarea name="page_seo[description]" cols="30" rows="5"></textarea>
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


<?php require admin_view('/static/footer'); ?>
