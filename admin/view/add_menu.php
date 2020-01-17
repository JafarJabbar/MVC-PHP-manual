<?php require admin_view('/static/header'); ?>

<div class="content">
    <div class="box- menu-container">
        <h2>Menyu əlavə et</h2>
        <form action="" method="post">
            <ul id="menu">
                <div class="menu-item">
                    <input type="text" value="<?= post('menu_title') ?>" name="menu_title" placeholder="Menyu title">
                </div>
                <li>
                    <div class="menu-item">
                        <a href="#" class="delete-menu">
                            <i class="fa fa-times"></i>
                        </a>
                        <input type="text" name="title[]" placeholder="Menyu Adı">
                        <input type="text" name="url[]" placeholder="Menyu Linki">
                    </div>
                    <div id="subMenu" class="sub-menu">
                        <ul>

                        </ul>
                    </div>
                    <a href="#" id="add_submenu" class="add_submenu btn">Submenyu artır</a>
                </li>

            </ul>
            <div class="menu-btn">
                <a href="#" id="add_menu" class="btn">Menyu əlavə et</a>
                <button type="submit" value="1" name="submit">Yadda saxla</button>
            </div>
        </form>
    </div>
</div>
<script>

    $(function () {
        $("#add_menu").on('click',function (e) {
            $('#menu').append('<li>\n' +
                '               <div class="menu-item">\n' +
                '                        <a href="#" class="delete-menu">\n' +
                '                            <i class="fa fa-times"></i>\n' +
                '                        </a>\n' +
                '                        <input type="text" name="title[]" placeholder="Menü Adı">\n' +
                '                        <input type="text" name="url[]" placeholder="Menü Linki">\n' +
                '                    </div>' +
                '                   <div id="subMenu" class="sub-menu"><ul></ul></div>\n' +
                '                    <a href="#" id="add_submenu" class="add-submenu btn">Alt Menü Ekle</a>\n' +
                '                </li>');
            e.preventDefault();

        });
        $(document.body).on('click','#add_submenu',function (e) {
            var index=$(this).closest('li').index()-1;
            $(this).prev('#subMenu').find('ul').append('<li>\n' +
                '                                <div class="menu-item">\n' +
                '                                    <a href="#" class="delete-menu">\n' +
                '                                        <i class="fa fa-times"></i>\n' +
                '                                    </a>\n' +
                '                                    <input type="text" name="sub_title_'+index+'[]"  placeholder="Menü Adı">\n' +
                '                                    <input type="text" name="sub_url_'+index+'[]"  placeholder="Menü Linki">\n' +
                '                                </div>\n' +
                '                            </li>');
            e.preventDefault();
        });
        $(document.body).on('click','.delete-menu',function (e) {
            if($('#menu li').length===1) {
                alert("Bir menyu qalmalidir...");
            }else{
                $(this).closest('li').remove();
            }
            e.preventDefault();
        })
    })

</script>
<?php require admin_view('/static/footer'); ?>
