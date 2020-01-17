<?php require view('static/header')?>
<section class="jumbotron text-center">
    <div class="container">
        <h1>Bizimlə əlaqə</h1>
        <div class="breadcrumb-custom">
            <a href="<?= site_url() ?>">Anasayfa</a> /
            <a href="" >Bizimlə əlaqə</a>
        </div>
    </div>
</section>
<div class="container">
    <form action="" id="contact-form" onsubmit="return false" >
        <div class="alert alert-danger" style="display: none;" id="contact-error-msg" role="alert"></div>
        <div class="alert alert-success" style="display: none;" id="contact-success-msg" role="alert"></div>
        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Ad-Soyad</label>
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control"  name="email">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">Telefon</label>
                    <input type="text" class="form-control"  name="phone">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="subject">Mesajın mövzusu</label>
                    <input type="text" class="form-control"  name="subject">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="message">Mesaj</label>
                    <textarea  name="message" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <button type="submit" onclick="return contact('#contact-form')" class="btn btn-primary">Gönder</button>
            </div>


    </div>
    </form>
</div>

<?php require view('static/footer')?>
