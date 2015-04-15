<h3>Edit slider</h3>
<div class="row">
	<div class="col-lg-5">
		<h4>Homepage slider</h4>
		<form id="slider-home" method="post" action="<?= $ev::buildUrl('admin/home/_edit/' . $data->id) ?>" enctype="multipart/form-data">
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" id="title" value="<?= $data->title ?>" class="form-control">
			</div>
			<div class="form-group">
				<label for="body-slider">Body</label>
				<textarea name="body" id="body-slider" class="form-control" cols="30" rows="3"><?= $data->body ?></textarea>
			</div>
			<div class="form-group">
				<label for="image">Image</label>
				<input type="file" name="image" id="image" class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Update slider <i class="fa fa-save"></i></button>
			</div>
		</form>
	</div>
	<div class="col-lg-7">
		<h4>Image</h4>
		<img src="<?= $data->image_link ?>" class="img-thumbnail" alt="">
	</div>
</div>