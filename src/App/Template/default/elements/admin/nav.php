<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= $ev::buildUrl('admin/home/_index') ?>">Easily CMS</a>
    </div><!-- navbar header -->
    <div id="navbar" class="navbar-collapse collapse navbar-right">
      <ul class="nav navbar-nav">
        <li><a href="<?= $ev::buildUrl('admin/home/_index') ?>">Home <i class="fa fa-picture-o"></i></a></li>
        <li><a href="<?= $ev::buildUrl('admin/blog/_index') ?>">Blog <i class="fa fa-pencil"></i></a></li>
        <li><a href="<?= $ev::buildUrl('admin/users/_index') ?>">Users <i class="fa fa-user"></i></a></li>
        <li><a href="<?= $ev::buildUrl('admin/about/_index') ?>">About <i class="fa fa-book"></i></a></li>
        <li><a href="<?= $ev::buildUrl('admin/contact/_index') ?>">Contact <i class="fa fa-phone-square"></i></a></li>
        <li><a href="<?= $ev::buildUrl('admin/users/logout') ?>">Logout <i class="fa fa-sign-out"></i></a></li>
      </ul>
    </div><!-- navbar -->
  </div>
</nav>