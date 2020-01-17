<?php require admin_view('/static/header'); ?>
<!--content-->
<div class="content">

    <div class="box-">
        <h1>
            Parametrler
        </h1>
        <hr>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="tab" tab>
        <div class="tab-list" tab-list>
            <ul>
                <li><a href="#">Ümumi</a></li>
                <li><a href="#">Maintance mode</a></li>
                <li><a href="#">Header</a></li>
                <li><a href="#">Footer</a></li>
                <li><a href="#">SMTP Mail</a></li>
                <li><a href="#">Şərhlər</a></li>
                <li><a href="#">Səhifələmə</a></li>
            </ul>
        </div>
        <div class="box-">
            <form action="" method="post" class="form label">
                <div class="tab-container">
                    <div tab-content>
                        <ul>
                            <li>
                                <label ">Sayt Title</label>
                                <div class="form-content">
                                    <input type="text" value="<?= setting('title'); ?>" name="settings[title]">
                                </div>
                            </li>
                            <li>
                                <label ">Sayt description</label>
                                <div class="form-content">
                            <textarea name="settings[description]" id="" cols="30"
                                      rows="5"><?= setting('description'); ?></textarea>
                                </div>
                            </li>
                            <li>
                                <label>Sayt keywords</label>
                                <div class="form-content">
                                    <input type="text" value="<?= setting('keywords'); ?>" name="settings[keywords]">
                                </div>
                            </li>
                            <li>
                                <label ">Sayt teması</label>
                                <div class="form-content">
                                    <select name="settings[theme]">
                                        <option value="null">--Tema sech--</option>
                                        <?php foreach ($themes as $theme): ?>
                                            <option <?= setting('theme') == $theme ? 'selected' : null ?>
                                                    value="<?= $theme; ?>"><?= $theme; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <label ">Blog  səhifəsi üçün Title</label>
                                <div class="form-content">
                                    <input type="text" value="<?= setting('blog_title'); ?>"
                                           name="settings[blog_title]">
                                </div>
                            </li>
                            <li>
                                <label ">Blog  səhifəsi üçün description</label>
                                <div class="form-content">
                            <textarea name="settings[blog_description]" id="" cols="30"
                                      rows="5"><?= setting('blo_description'); ?></textarea>
                                </div>
                            </li>
                            <li>
                                <label ">Blog axtarış səhifəsi üçün Title</label>
                                <div class="form-content">
                                    <input type="text" value="<?= setting('blog_title'); ?>"
                                           name="settings[blog_search_title]">
                                </div>
                            </li>
                            <li>
                                <label ">Blog axtarış səhifəsi üçün description</label>
                                <div class="form-content">
                            <textarea name="settings[blog_description]" id="" cols="30"
                                      rows="5"><?= setting('blog_search_description'); ?></textarea>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div tab-content>
                        <ul>
                            <li>
                                <label ">Maintance mode</label>
                                <div class="form-content">
                                    <select name="settings[maintance_mode]">
                                        <option <?= setting('maintance_mode') == 1 ? 'selected' : null ?> value=1>Bəli
                                        </option>
                                        <option <?= setting('maintance_mode') == 2 ? 'selected' : null ?> value=2>Xeyr
                                        </option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <label>Maintance mode title</label>
                                <div class="form-content">
                                    <input type="text" value="<?= setting('maintance_mode_title'); ?>"
                                           name="settings[maintance_mode_title]">
                                </div>
                            </li>
                            <li>
                                <label>Maintance mode description</label>
                                <div class="form-content">
                            <textarea name="settings[maintance_mode_description]" cols="30"
                                      rows="5"><?= setting('maintance_mode_description'); ?></textarea>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div tab-content>
                        <ul>
                            <li>
                                <label>Logo metni</label>
                                <div class="form-content">
                                    <input type="text" value="<?= setting('logo'); ?>" name="settings[logo]">
                                </div>
                            </li>
                            <li>
                                <label>Search placeholder</label>
                                <div class="form-content">
                                    <input type="text" value="<?= setting('search_placeholder'); ?>"
                                           name="settings[search_placeholder]">
                                </div>
                            </li>

                            <li>
                                <label>Welcome Title</label>
                                <div class="form-content">
                                    <input type="text" value="<?= setting('welcome_title'); ?>"
                                           name="settings[welcome_title]">
                                </div>
                            </li>
                            <li>
                                <label>Welcome metni</label>
                                <div class="form-content">
                            <textarea name="settings[welcome_text]" cols="30"
                                      rows="5"><?= setting('welcome_text'); ?></textarea>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div tab-content>
                        <ul>
                            <li>
                                <label>Hakkımda</label>
                                <div class="form-content">
                                    <textarea name="settings[about]" cols="30"
                                              rows="5"><?= setting('about'); ?></textarea>
                                </div>
                            </li>
                            <li>
                                <label>Facebook</label>
                                <div class="form-content">
                                    <input type="text" value="<?= setting('facebook'); ?>" name="settings[facebook]">
                                </div>
                            </li>
                            <li>
                                <label>Stack Over Flow</label>
                                <div class="form-content">
                                    <input type="text" value="<?= setting('stackoverflow'); ?>"
                                           name="settings[stackoverflow]">
                                </div>
                            </li>
                            <li>
                                <label>Github</label>
                                <div class="form-content">
                                    <input type="text" value="<?= setting('github'); ?>" name="settings[github]">
                                </div>
                            </li>
                            <li>
                                <label>LinkedIn</label>
                                <div class="form-content">
                                    <input type="text" value="<?= setting('linkedin'); ?>" name="settings[linkedin]">
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div tab-content>
                        <ul>
                            <li>
                                <label>SMTP Mail Host</label>
                                <div class="form-content">
                                    <input type="text" value="<?= setting('smtp_host'); ?>" name="settings[smtp_host]">
                                </div>
                            </li>
                            <li>
                                <label>SMTP Email</label>
                                <div class="form-content">
                                    <input type="text" value="<?= setting('smtp_mail'); ?>" name="settings[smtp_mail]">
                                </div>
                            </li>
                            <li>
                                <label>SMTP şifrə</label>
                                <div class="form-content">
                                    <input type="text" value="<?= setting('smtp_password'); ?>"
                                           name="settings[smtp_password]">
                                </div>
                            </li>

                            <li>
                                <label>SMTP secure</label>
                                <div class="form-content">
                                    <select name="settings[smtp_secure]">
                                        <option <?= setting('smtp_secure') == 'ssl' ? 'selected' : null ?> value='ssl'>
                                            SSL
                                        </option>
                                        <option <?= setting('smtp_secure') == 'tls' ? 'selected' : null ?> value='tls'>
                                            TLS
                                        </option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <label>SMTP port</label>
                                <div class="form-content">
                                    <input type="text" value="<?= setting('smtp_port'); ?>" name="settings[smtp_port]">
                                </div>
                            </li>
                            <li>
                                <label>SMTP göndərənin emaili</label>
                                <div class="form-content">
                                    <input type="text" value="<?= setting('smtp_sender_email'); ?>"
                                           name="settings[smtp_sender_email]">
                                </div>
                            </li>
                            <li>
                                <label>SMTP göndərənin adı</label>
                                <div class="form-content">
                                    <input type="text" value="<?= setting('smtp_sender_name'); ?>"
                                           name="settings[smtp_sender_name]">
                                </div>
                            </li>
                    </div>
                    <div tab-content>
                        <ul>
                            <li>
                                <label>"Qonaqlar" üçün şərhlər"</label>
                                <div class="form-content">
                                    <select name="settings[guest_comment]">
                                        <option <?= setting('guest_comment') == 1 ? 'selected' : null ?> value=1>
                                            Təsdiqlənib
                                        </option>
                                        <option <?= setting('guest_comment') == 2 ? 'selected' : null ?> value=2>
                                            Təsdiqlənməyib
                                        </option>
                                        <
                                    </select>
                                </div>
                            </li>
                            <li>
                                <label>İstfadəçilər üçün şərhlər</label>
                                <div class="form-content">
                                    <select name="settings[user_comment]">
                                        <option <?= setting('user_comment') == 1 ? 'selected' : null ?> value=1>
                                            Təsdiqlənib
                                        </option>
                                        <option <?= setting('user_comment') == 2 ? 'selected' : null ?> value=2>
                                            Təsdiqlənməyib
                                        </option>
                                        <
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div tab-content>
                        <ul>
                            <li>
                                <label>Blog səhifəsi üçün səhifələmə</label>
                                <div class="form-content">
                                    <input type="text" value="<?= setting('blog_pagination'); ?>"
                                           name="settings[blog_pagination]">
                                </div>
                            </li>
                            <li>
                                <label>Blogda axtarış səhifəsi üçün səhifələmə</label>
                                <div class="form-content">
                                    <input type="text" value="<?= setting('blog_search_pagination'); ?>"
                                           name="settings[blog_search_pagination]">
                                </div>
                            </li>
                            <li>
                                <label>Blog kateqoriyaları səhifəsi üçün səhifələmə</label>
                                <div class="form-content">
                                    <input type="text" value="<?= setting('blog_category_pagination'); ?>"
                                           name="settings[blog_category_pagination]">
                                </div>
                            </li>
                            <li>
                                <label>Blog etiketləri səhifəsi üçün səhifələmə</label>
                                <div class="form-content">
                                    <input type="text" value="<?= setting('blog_tag_pagination'); ?>"
                                           name="settings[blog_tag_pagination]">
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <ul>
                    <li class="submit">
                        <input type="hidden" name="submit" value="1">
                        <button type="submit">Yadda saxla</button>
                    </li>
                    <br>
                    <br>
                </ul>
            </form>
        </div>

    </div>
</div>


<?php require admin_view('/static/footer'); ?>
