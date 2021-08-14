<?php
$title = 'Edit Profile';
include "connection.php";
include "modals/navbar.php";

$sql = "SELECT * FROM student WHERE username='$_SESSION[login_user]'";
$result = mysqli_query($db, $sql) or die(mysql_error());

while ($row = mysqli_fetch_assoc($result)) {
	$first = $row['first'];
	$last = $row['last'];
	$username = $row['username'];
	$password = $row['password'];
	$email = $row['email'];
	$contact = $row['contact'];
}
?>
<!-- Edit Form -->
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
	<div class="max-w-md w-full space-y-8">
		<div>
			<h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Edit Information</h2>
			<p class="mt-2 text-center text-sm text-gray-600">
				Welcome, <?php echo $_SESSION['login_user']; ?>
			</p>
		</div>
		<form class="mt-8 space-y-6" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="remember" value="true">
			<div class="rounded-md shadow-sm -space-y-px">
				<!-- First Name -->
				<div>
					<label for="firstName" class="sr-only">First Name</label>
					<input id="firstName" name="first" type="text" autocomplete="first" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="First Name" value="<?php echo $first; ?>">
				</div>
				<!-- Last Name -->
				<div>
					<label for="lastName" class="sr-only">Last Name</label>
					<input id="lastName" name="last" type="text" autocomplete="last" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Last Name" value="<?php echo $last; ?>">
				</div>
				<!-- Username -->
				<div>
					<label for="username" class="sr-only">Username</label>
					<input id="username" name="username" type="text" autocomplete="username" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Username" value="<?php echo $username; ?>">
				</div>
				<!-- Email Address -->
				<div>
					<label for="email-address" class="sr-only">Email address</label>
					<input id="email-address" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address" value="<?php echo $email; ?>">
				</div>
				<!-- Password -->
				<div>
					<label for="password" class="sr-only">Password</label>
					<input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password" value="<?php echo $password; ?>">
				</div>
				<!-- Mobile Number -->
				<div>
					<label for="mobileNumber" class="sr-only">Mobile Number</label>
					<input id="mobileNumber" name="contact" type="text" autocomplete="contact" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Mobile Number" value="<?php echo $contact; ?>">
				</div>
			</div>
			<div>
				<button type="submit" name="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
			</div>
		</form>
	</div>
</div>
<?php

if (isset($_POST['submit'])) {
	move_uploaded_file($_FILES['file']['tmp_name'], "images/" . $_FILES['file']['name']);

	$first = $_POST['first'];
	$last = $_POST['last'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$pic = $_FILES['file']['name'];

	$sql1 = "UPDATE student SET pic='$pic', first='$first', last='$last', username='$username', password='$password', email='$email', contact='$contact' WHERE username='" . $_SESSION['login_user'] . "';";

	if (mysqli_query($db, $sql1)) {
?>
		<script type="text/javascript">
			alert("Saved Successfully.");
			window.location = "profile.php";
		</script>
<?php
	}
}
?>


<?php
include 'modals/footer.php';
?>