<div class="row">
	<div class="col-lg-6">
		<h3>New user</h3>
		<form id="post-add" method="post" action="<?= $ev::buildUrl('admin/users/_edit/' . $data->id) ?>" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" value="<?= $data->name ?>" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<textarea name="email" id="email" class="form-control" cols="30" rows="3"><?= $data->email ?></textarea>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Update user <i class="fa fa-save"></i></button>
			</div>
		</form>
	</div>
	<div class="col-lg-6">
		<h3>Info</h3>
		<ul class="list-group">
		    <li class="list-group-item"><b>Name: </b><?= $data->name ?></li>
		    <li class="list-group-item"><b>Email: </b><?= $data->email ?></li>
		    <li class="list-group-item"><b>Role: </b><?= $data->role ?></li>
		    <li class="list-group-item"><b>Created: </b><?= $data->created ?></li>
		    <li class="list-group-item"><b>Updated: </b><?= $data->updated ?></li>
		</ul>
	</div>
</div>