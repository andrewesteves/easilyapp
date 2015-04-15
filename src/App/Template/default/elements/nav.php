<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom is-visible is-fixed navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= $ev::buildUrl('') ?>">EasilyCMS</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?= $ev::buildUrl('') ?>">Home</a>
                </li>
                <li>
                    <a href="<?= $ev::buildUrl('about') ?>">About</a>
                </li>
                <li>
                    <a href="<?= $ev::buildUrl('blog') ?>">Blog</a>
                </li>
                <li>
                    <a href="<?= $ev::buildUrl('contact') ?>">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>