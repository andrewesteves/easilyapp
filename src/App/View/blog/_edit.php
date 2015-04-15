<h3>Edit post</h3>
<div class="row">
	<div class="col-lg-12">
		<form id="post-add" method="post" action="<?= $ev::buildUrl('admin/blog/_edit/' . $data->id) ?>" enctype="multipart/form-data">
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" id="title" value="<?= $data->title ?>" class="form-control">
			</div>
			<div class="form-group">
				<label for="body-slider">Body</label>
				<textarea name="body" id="post-body" class="form-control" cols="30" rows="3"><?= $data->body ?></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Update post <i class="fa fa-save"></i></button>
			</div>
		</form>
	</div>
</div>