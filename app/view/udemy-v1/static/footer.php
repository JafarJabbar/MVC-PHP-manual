<div class="container">

    <div class="row">
        <div class="col-md-12">
            <footer class="pt-4 my-md-5 pt-md-5 border-top">
                <div class="row">
                    <div class="col-12 col-md">
                        <img class="mb-2" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt=""
                             width="24" height="24">
                        <small class="d-block mb-3 text-muted">© 2019</small>
                    </div>
                    <div class="col-12 col-md">
                        <h5>Features</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Cool stuff</a></li>
                            <li><a class="text-muted" href="#">Random feature</a></li>
                            <li><a class="text-muted" href="#">Team feature</a></li>
                            <li><a class="text-muted" href="#">Stuff for developers</a></li>
                            <li><a class="text-muted" href="#">Another one</a></li>
                            <li><a class="text-muted" href="#">Last time</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md pr-5">
                        <h5>Hakkımda</h5>
                        <p class="small">
                          <?= setting('about') ?>
                        </p>
                    </div>
                    <div class="col-12 col-md">
                        <h5>Sosyal Medya</h5>
                        <ul class="list-unstyled text-small">
                         <?php if($facebook=setting('facebook')): ?>
                             <li><a class="text-muted" href="<?=$facebook ?>"><i class="fa fa-facebook-square"></i> Jafar Jabbarli</a>
                             </li>
                            <?php endif; ?>
                            <?php if($stack=setting('stackoverflow')): ?>
                                <li><a class="text-muted" href="<?= $stack ?>"><i class="fa fa-stack-overflow"></i> Djeff777</a>
                                </li>
                            <?php endif; ?>
                            <?php if($github=setting('github')): ?>
                                <li><a class="text-muted" href="<?= $github ?>"><i class="fa fa-github-square"></i> djeff_c</a></li>
                            <?php endif; ?>
                            <?php if($link=setting('linkedin')): ?>
                                <li><a class="text-muted" href="<?= $link ?>"><i class="fa fa-linkedin-square"></i> Jeff_Jabbarli</a></li>
                            <?php endif; ?>

                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>