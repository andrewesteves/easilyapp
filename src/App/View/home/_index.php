<h3>Welcome, <?= $data['name'] ?></h3>
<div class="row">
	<div class="col-lg-6">
		<h4>Homepage slider</h4>
		<form id="slider-home" method="post" action="<?= $ev::buildUrl('admin/home/_add') ?>" enctype="multipart/form-data">
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" id="title" value="<?= $ev::inputForm('title') ?>" class="form-control">
			</div>
			<div class="form-group">
				<label for="body-slider">Body</label>
				<textarea name="body" id="body-slider" class="form-control" cols="30" rows="3"><?= $ev::inputForm('body') ?></textarea>
			</div>
			<div class="form-group">
				<label for="image">Image</label>
				<input type="file" name="image" id="image" class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Save slider <i class="fa fa-save"></i></button>
			</div>
		</form>
	</div>

	<div class="col-sm-6 col-md-6">
		<?php foreach($data['home'] as $home): ?>
	    <div class="thumbnail">
	      <img src="<?= $home->image_link ?>">
	      <div class="caption">
	        <h3><?= $home->title ?></h3>
	        <p><?= $home->body ?></p>
	        <p>
	        <?= $ev::link('Edit <i class="fa fa-edit"></i>', 'admin/home/_edit/' . $home->id, 'class="btn btn-primary"') ?>
			<?= $ev::link('Delete <i class="fa fa-remove"></i>', 'admin/home/_delete/' . $home->id, 'class="btn btn-danger"', 'Are your sure?') ?>
	        </p>
	      </div>
	    </div>
	    <?php endforeach ?>
	</div>

</div>