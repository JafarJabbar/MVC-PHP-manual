<?php require admin_view('/static/header'); ?>
<!--content-->
<div  class="content">

    <div class="box-">
        <h1>
            Settings
        </h1>
    </div>
    <div class="box-container container-50">

    <div class="clear" style="height: 10px;"></div>
    <?php if ($row['contact_read_mark']==1): ?>
    <div class="message success box-">
        <?= timeConvert($row['contact_read_date']) ?> <br><?= $row['contact_read_user'] ?> tərəfindən oxundu.
    </div>
    <?php endif; ?>

    <div class="box-">
        <form action="" method="post" class="form label">

            <ul>

                <li>
                    <label>Ad-soyad</label>
                    <div style="padding-top: 12px;" class="form-content">
                        <?=$row['contact_name']?>
                    </div>
                </li>
                <li>
                    <label>E-poçt</label>
                    <div style="padding-top: 12px;" class="form-content">
                        <?=$row['contact_email']?>
                    </div>
                </li>
                <?php if(!empty($row['contact_phone'])): ?>
                    <li>
                        <label>Mobil nömrə</label>
                        <div style="padding-top: 12px;" class="form-content">
                            <?=$row['contact_phone']?>
                        </div>
                    </li>
                <?php endif; ?>

                <li>
                    <label>Mövzu</label>
                    <div style="padding-top: 12px;" class="form-content">
                        <?=$row['contact_subject']?>
                    </div>
                </li>
                <li>
                    <label>Mesaj</label>
                    <div style="padding-top: 12px;" class="form-content">
                        <?=nl2br($row['contact_message'])?>
                    </div>
                </li>
            </ul>
        </form>
    </div>
    </div>
    <div class="box-container container-50">
        <div class="box" id="div-1">
            <h3>
                Cevap Ver
            </h3>
            <div class="box-content">
                <div class="message success box-" style="display: none" id="success anwer-success-msg"></div>
                <div class="message error box-" style="display: none;" id="error anwer-error-msg"></div>
                <form action="" id="answer-form" onsubmit="return false;" class="form">
                    <input type="hidden" name="name" value="<?=$row['contact_name']?>">
                    <ul>
                        <li>
                            <input type="text" name="subject" value="RE: <?=$row['contact_subject']?>" id="input" placeholder="Mesaj mövzusu">
                        </li>
                        <li>
                            <input type="text" name="email" value="<?=$row['contact_email']?>" id="input" placeholder="E-mail">
                        </li>
                        <li>
                            <textarea name="message" id="message" cols="30" rows="5" placeholder="Mesaj"></textarea>
                        </li>
                        <li>
                            <button onclick="send_mail('#answer-form')" type="submit">Göndər</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <style>

    </style>
    <?php require admin_view('/static/footer'); ?>
