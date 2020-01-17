<?php require view('static/header') ?>
<section class="jumbotron text-center">
    <div class="container">
        <h1>Axtarış nəticəsi</h1>
        <div class="breadcrumb-custom">
            <a href="<?=site_url()?>">Ana səhifə</a> /
            <a href="<?=site_url('blog')?>" >Blog</a>
            <a href="" class="active">/<?=get('q')?>
            </a>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12   ">

            <h4 class="pb-3">Ən yenilər</h4>
            <?php if($row): ?>
            <?php foreach ($row as $post): ?>
                <div class="card mb-3">
                    <div class="card-header">
                        <?=$post['category_name']?>
                        <div class="date" title="<?=$post['post_date']?>">
                            <?=timeConvert($post['post_date'])?>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?=$post['post_name']?></h5>
                        <div class="card-text">
                            <?=htmlspecialchars_decode($post['post_short_content'])?>
                        </div>
                        <a href="<?=site_url('blog/'.$post['post_url'])?>" class="btn btn-dark">Ardını oxu</a>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php else:?>
                    <div class="alert alert-warning">
                        Hal hazırda heç bir post yüklənməmişdir...
                    </div>
            <?php endif; ?>

         <?php if ($totalRecord>$pageLimit): ?>
             <div class="pagination-container text-center mb-4">
                 <nav aria-label="Page navigation example">
                     <ul class="pagination">
                         <li class="page-item">
                             <a class="page-link" href="<?=site_url('blog/search/?q='.get('q').'&'.$pageParam.'='.$db->prevPage() )?>" aria-label="Previous">
                                 <span aria-hidden="true">«</span>
                                 <span class="sr-only">Əvvəlki</span>
                             </a>
                         </li>
                         <li class="page-item">
                             <?= $db->showPagination(site_url('blog/search/?q='.get('q').'&'.$pageParam.'=[page]'),'active',true) ?>
                         </li>
                        <li>

                        </li>
                         <li class="page-item">
                             <a class="page-link" href="<?=site_url('blog/search/?q='.get('q').'&'.$pageParam.'='.$db->nextPage() )?>" aria-label="Next">
                                 <span aria-hidden="true">»</span>
                                 <span class="sr-only">Sonraki</span>
                             </a>
                         </li>
                     </ul>
                 </nav>
             </div>
         <?php endif; ?>

        </div>

    </div>
</div>
<?php require view('static/footer') ?>
