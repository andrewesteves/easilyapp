<div class="row">
	<div class="col-lg-6">
		<h3>New user</h3>
		<form id="post-add" method="post" action="<?= $ev::buildUrl('admin/users/_add/') ?>" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" value="<?= $ev::inputForm('name') ?>" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" class="form-control" value="<?= $ev::inputForm('email') ?>">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control" value="<?= $ev::inputForm('password') ?>">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Save user <i class="fa fa-save"></i></button>
			</div>
		</form>
	</div>
	<div class="col-lg-6">
		<h3>Users</h3>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Created</th>
					<th width="20%">Actions</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($data['users'] as $user): ?>
				<tr>
					<td><?= $user->id ?></td>
					<td><?= $user->name ?></td>
					<td><?= $user->email ?></td>
					<td>
						 <?= $ev::link('<i class="fa fa-edit"></i>', 'admin/users/_edit/' . $user->id, 'class="btn btn-primary"') ?>
						<?= $ev::link('<i class="fa fa-remove"></i>', 'admin/users/_delete/' . $user->id, 'class="btn btn-danger"', 'Are your sure?') ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>