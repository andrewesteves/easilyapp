<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Easily CMS</title>
	<?= \Easily\EasilyView::css(['bootstrap', 'bootstrap-theme', 'font-awesome', 'summernote']) ?>
	<meta name="author" content="Andrew Esteves">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	
<div class="container">
  <?= \Easily\EasilyView::flash() ?>
	<?php \Easily\EasilyView::show() ?>
</div>

<?= \Easily\EasilyView::js(['jquery-2.1.1', 'bootstrap', 'summernote', 'admin']) ?>
</body>
</html>