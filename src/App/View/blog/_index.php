<div class="row">
	<div class="col-lg-6">
		<h3>Blog</h3>
	</div>
	<div class="col-lg-6">
		<h3>
		<?= $ev::link('Add post <i class="fa fa-plus-circle"></i>', 'admin/blog/_add', 'class="btn btn-default pull-right"') ?>
		</h3>
	</div>
	<div class="col-lg-12">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Created</th>
					<th width="15%">Actions</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($data['blog'] as $post): ?>
				<tr>
					<td><?= $post->id ?></td>
					<td><?= $post->title ?></td>
					<td><?= $post->created ?></td>
					<td>
						 <?= $ev::link('Edit <i class="fa fa-edit"></i>', 'admin/blog/_edit/' . $post->id, 'class="btn btn-primary"') ?>
						<?= $ev::link('Delete <i class="fa fa-remove"></i>', 'admin/blog/_delete/' . $post->id, 'class="btn btn-danger"', 'Are your sure?') ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>