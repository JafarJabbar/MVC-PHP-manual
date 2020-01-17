
<div class="media comment-box">
    <div class="media-left">
        <a href="#">
            <img class="img-responsive user-photo" src="<?= get_gravatar(session('user_email')) ?>">
        </a>
    </div>
    <div class="media-body">
        <h6 class="media-heading"><?=$comment['comment_name']?><small style="float: right;"><?=timeConvert($comment['comment_date'])?></small></h6>
        <p><?=$comment['comment_content']?></p>

    </div>
</div>