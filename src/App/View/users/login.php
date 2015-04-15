<h1>Login</h1>
<form action="<?= $ev::buildUrl('admin/users/login') ?>" method="post">
	<div class="form-group">
		<label for="">Email</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label for="">Password</label>
		<input type="password" name="password" class="form-control">
	</div>
	<input type="submit" value="Enter" class="btn btn-primary">
</form>