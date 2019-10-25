<?php
	include 'inc/header.php';
	include 'lib/user.php';
	Session::checkSession();
	$user = new User();

?>

<?php
	$loginmsg = Session::get("loginmsg");
	if (isset($loginmsg)) {
		echo $loginmsg;
	}
	Session::set("loginmsg", NULL);
?>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h2>User List<span class="pull-right"><strong>Welcome</strong>
				<?php
					$name = Session::get("name");
					if (isset($name)) {
						echo $name;
					}
				?>

			</span></h2>
		</div>
		<div class="panel-body">
			<table class="table table-striped">
				<th width="20%">Serial</th>
				<th width="20%">Name</th>
				<th width="20%">Username</th>
				<th width="20%">Email</th>
				<th width="20%">Action</th>

				<tr>
					<td>01</td>
					<td>MD.Rasel Hossain</td>
					<td>Rasel</td>
					<td>Raselhossain@gmail.com</td>
					<td><a class="btn btn-primary" href="profile.php?id=1">View</a></td>
				</tr>
				<tr>
					<td>02</td>
					<td>Fatmi Oubaidute Tohra</td>
					<td>Tohra</td>
					<td>Tohra@gmail.com</td>
					<td><a class="btn btn-primary" href="profile.php?id=1">View</a></td>
				</tr>
				<tr>
					<td>03</td>
					<td>Samira Yeasmin Shaluk</td>
					<td>Shaluk</td>
					<td>Shaluk@gmail.com</td>
					<td><a class="btn btn-primary" href="profile.php?id=1">View</a></td>
				</tr>
			</table>
		</div>
	</div>

<?php
	include 'inc/footer.php';
?>