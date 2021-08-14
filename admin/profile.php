<?php
$title = 'Profile';
include "connection.php";
include "modals/navbar.php";
$q = mysqli_query($db, "SELECT * FROM admin where username='$_SESSION[login_user]' ;");
$row = mysqli_fetch_assoc($q);
?>

<section class="p-5">
	<div class="container text-center text-indigo-500">
		<h1>WELCOME</h1>
		<h4>
			<?php echo $_SESSION['login_user']; ?>
		</h4>
	</div>
	<!-- Details -->
	<div class="container text-center">
		<table class="table table-primary table-stripped">
			<tr>
				<th scope="row">First Name</th>
				<td><?php echo $row['first'] ?></td>
			</tr>
			<tr>
				<th scope="row">Last Name</th>
				<td><?php echo $row['last'] ?></td>
			</tr>
			<tr>
				<th scope="row">Username</th>
				<td><?php echo $row['username'] ?></td>
			</tr>
			<tr>
				<th scope="row">Email</th>
				<td><?php echo $row['email'] ?></td>
			</tr>
			<tr>
				<th scope="row">Mobile Number</th>
				<td><?php echo $row['contact'] ?></td>
			</tr>
		</table>
	</div>
	<!-- Button -->
	<div class="container text-center">
		<form action="" method="post">
			<button class="btn btn-primary btn-large" name="submit1">Edit</button>
		</form>
	</div>
</section>

<?php
if (isset($_POST['submit1'])) { ?>
	<script type="text/javascript">
		window.location = "edit.php"
	</script>
<?php }
include 'modals/footer.php'; ?>