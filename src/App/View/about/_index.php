<h3>About</h3>
<div class="row">
	<div class="col-lg-12">
		<form id="post-add" method="post" action="<?= $ev::buildUrl('admin/about/_index/') ?>" enctype="multipart/form-data">
			<div class="form-group">
				<textarea name="body" id="post-body" class="form-control" cols="30" rows="3"><?= $data->body ?></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Update about <i class="fa fa-save"></i></button>
			</div>
		</form>
	</div>
</div>