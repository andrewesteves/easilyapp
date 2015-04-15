<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<div id="carousel" class="carousel slide" data-ride="carousel">
<div class="carousel-inner" role="listbox">
<?php $n = 0; foreach($data['home'] as $home): ?>
<div class="item <?= !$n ? 'active' : '' ?>">
    <header class="intro-header" style="background-image: url('<?= $home->image_link ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1><?= $home->title ?></h1>
                        <hr class="small">
                        <span class="subheading"><?= $home->body ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
<?php $n++; endforeach; ?>
</div>
<a href="#carousel" class="btn btn-primary" data-slide="prev">Prev</a>
<a href="#carousel" class="btn btn-primary pull-right" data-slide="next">Next</a>
</div>
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <?php foreach($data['blog'] as $post): ?>
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
            <ul class="pager">
                <li class="next">
                    <a href="<?= $ev::buildUrl('blog') ?>">Blog Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<hr>