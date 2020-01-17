<?php require view('static/header') ?>
<section class="jumbotron text-center">
    <div class="container">
        <h1><?=$row['post_name']?></h1>
        <div class="breadcrumb-custom">
            <a href="<?=site_url()?>">Anasayfa</a> /
            <a href="<?=site_url('blog/category/'.$row['category_url'])?>"><?=$row['category_name']?></a> /
            <a href="" class="active"><?=$row['post_url']?></a>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card mb-3">
                <div class="card-header">
                    <?=$row['category_name']?>
                    <div class="date">
                        <?=$row['post_date']?>  (<?=timeConvert($row['post_date'])?>)
                    </div>
                </div>
                <div class="card-body">
                  <?=htmlspecialchars_decode($row['post_content'])?>
            <div class="card text-center mb-3">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#comments" role="tab" aria-controls="comments" aria-selected="true">Rəylər</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="share-tab" data-toggle="tab" href="#share" role="tab" aria-controls="share" aria-selected="false">Paylaş</a>
                        </li>
                    </ul>
                </div>





                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="comments" role="tabpanel" aria-labelledby="home-tab">
                            <?php if ($comments): ?>
                                    <div id="comments">
                                        <?php foreach ($comments as $comment ) require 'static/comment.php'?>

                                    </div>
                            <?php else: ?>

                           <div id="no_comment">
                               <h5 class="card-title">İlk olaraq fikrinizi siz yazın!</h5>
                               <p class="card-text">Bu post üçün heç bir rəy yazılmamışdır, ilk rəyi siz yazaraq dəstək verin!</p>
                               <a href="#comment_form" class="btn btn-primary">Fikrini yaz</a>
                           </div>
                                <div id="comments"></div>
                        <?php endif; ?>
                        </div>
                        <div class="tab-pane fade" id="share" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="share mb-4">
                                <a target="_blank" href="https://www.facebook.com/sharer.php?s=100&p[url]=<?=$row['post_name']?>-<?=site_url('blog/'.$row['post_url'])?>" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook'da Paylaş">
                                    <span class="fab fa-facebook-f"></span>
                                </a>
                                <a target="_blank" href="https://twitter.com/share?url=<?=site_url('blog/'.$row['post_url'])?>&text=<?=$row['post_name']?>" class="twitter" data-toggle="tooltip" data-placement="top" title="Tweet at">
                                    <span class="fab fa-twitter"></span>
                                </a>
                                <a target="_blank" href="https://plus.google.com/share?url=<?=site_url('blog/'.$row['post_url'])?>" class="gplus" data-toggle="tooltip" data-placement="top" title="Google+'da Paylaş">
                                    <span class="fab fa-google-plus-g"></span>
                                </a>
                                <a target="_blank" href="http://www.linkedin.com/shareArticle?url=<?=site_url('blog/'.$row['post_url'])?>&title=<?=$row['post_name']?>" class="linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin'də Paylaş">
                                    <span class="fab fa-linkedin-in"></span>
                                </a>
                                <a style="background: #4ced69!important;" target="_blank" href="https://wa.me/?text=<?=$row['post_name']?>-<?=site_url('blog/'.$row['post_url'])?>" data-toggle="tooltip" data-placement="top" title="Whatsapp'dan Göndər">
                                    <span class="fab fa-whatsapp"></span>
                                </a>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Paylaşım Linki</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" onclick="this.select()" value="<?=site_url('blog/'.$row['post_url'])?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    Öz fikrini bildir
                </div>
                <div class="card-body">

                    <form onsubmit="return false;" id="comment_form" data-id="<?=$row['post_id']?>"  >
                        <div id="comment_msg"  style="display: block;">

                        </div>
                        <?php if (!session('user_id')): ?>
                       <div id="guest_comment">
                           <div class="form-group">
                               <label for="email">E-mail</label>
                               <input type="email" class="form-control" name="email">
                               <small id="emailHelp" class="form-text text-muted">E-mailiniz  rəylər göstərilən zaman gizli qalacaqdır.</small>
                           </div>
                           <div class="form-group">
                               <label for="name">Ad-soyad</label>
                               <input type="text" class="form-control" name="name">
                           </div>
                       </div>
                            <?php else: ?>
                            <div class="alert alert-warning">
                                <strong><?=session('username')?></strong> adı ilə rəy yazırsınız. [<a href="<?=site_url('log_out')?>">Çıxış</a>]
                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label for="comment">Rəyiniz</label>
                            <textarea name="comment" id="comment" cols="30" rows="5" class="form-control"></textarea>
                        </div>

                        <button type="submit" onclick="add_comment('#comment_form')" class="btn btn-primary">Göndər</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
<?php require view('static/footer') ?>


            <script>
                add_comment = function (formId) {
                    var postId=$(formId).data('id'),
                        data=$(formId).serialize()+'&post_id='+postId;
                    $.post(api_url+'/add_comment',data,function (response) {
                        if(response.error){
                            $('#comment_msg').removeClass().addClass('alert alert-danger').html(response.error).show();
                        }else if (response.success){
                            $('#comment_msg').removeClass().addClass('alert alert-success').html(response.success).show();
                            $("#comment_form input").val('');
                            $("#comment_form textarea").val('');
                        }else {
                            $('#no_comment').remove();
                            $('#comment_msg').hide().removeClass().html('');
                            $('#comments').append(response.comment);
                            $("#comment_form input").val('');
                            $("#comment_form textarea").val('');                        }

                    },'json')
                }
            </script>