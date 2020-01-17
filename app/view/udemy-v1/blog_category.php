<?php require view('static/header') ?>
<section class="jumbotron text-center">
    <div class="container">
        <h1><?=$category['category_name']?></h1>
        <div class="breadcrumb-custom">
            <a href="<?=site_url()?>">Ana səhifə</a> /
            <a href="<?=site_url('blog')?>" >Blog</a>
            <a href="" class="active">/<?=$category['category_name']?>
            </a>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-8">

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
                        <?=$category['category_name']?> kateqoriyası ilə bağlı heç bir post yüklənməmişdir...
                    </div>
            <?php endif; ?>

         <?php if ($totalRecord>$pageLimit): ?>
             <div class="pagination-container text-center mb-4">
                 <nav aria-label="Page navigation example">
                     <ul class="pagination">
                         <li class="page-item">
                             <a class="page-link" href="<?=site_url("blog/category/$category_url?$pageParam=".$db->prevPage())?>" aria-label="Previous">
                                 <span aria-hidden="true">«</span>
                                 <span class="sr-only">Əvvəlki</span>
                             </a>
                         </li>
                         <?= $db->showPagination(site_url("blog/category/$category_url?$pageParam=[page]"),'active',true) ?>
                         <li class="page-item">
                             <a class="page-link" href="<?=site_url("blog/category/$category_url?$pageParam=".$db->nextPage() )?>" aria-label="Next">
                                 <span aria-hidden="true">»</span>
                                 <span class="sr-only">Sonraki</span>
                             </a>
                         </li>
                     </ul>
                 </nav>
             </div>
         <?php endif; ?>

        </div>
        <div class="col-md-4">
            <h4 class="pb-3">
                <i class="fa fa-folder"></i>
                Kategoriler
            </h4>
            <ul class="list-group mb-4">
                <?php foreach (Blog::getCategory()->fetchAll(PDO::FETCH_ASSOC) as $category): ?>
                    <li class="list-group-item">
                        <a href="<?=site_url('blog/category/'.$category['category_url'])?>" style="color: #333;" class="d-flex justify-content-between align-items-center">
                            <?= $category['category_name'] ?>
                            <span class="badge badge-dark badge-pill"><?=$category['total']?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <h4 class="pb-3">
                <i class="fa fa-hashtag"></i>
                Etiketler
            </h4>
            <?php foreach (Blog::getRandomTags(8) as $tag):?>
                <a href="<?=site_url('blog/tags/'.$tag['tag_url'])?>" class="badge badge-light badge-pill"><?=$tag['tag_name']?></a>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php require view('static/footer') ?>

</body>
</html>
