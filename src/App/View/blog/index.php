<!-- Main Content -->
<div id="content-main" class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php foreach($data as $post): ?>
            <div class="post-preview">
                <a href="<?= $ev::buildUrl('blog/view/' . $post->slug . '/' . $post->id) ?>">
                    <h2 class="post-title">
                        <?= $post->title ?>
                    </h2>
                    <h3 class="post-subtitle">
                        <?= substr($post->body, 0, 50); ?>...
                    </h3>
                </a>
                <p class="post-meta">Created <?= $post->created ?></p>
            </div>
            <hr>
            <?php endforeach; ?>
            <!-- Pager -->
            <?= $ep::simple($vars['totalPages'], $vars['perPage']); ?>
        </div>
    </div>
</div>

<hr>