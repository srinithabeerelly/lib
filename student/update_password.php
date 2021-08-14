<?php
$title = 'Reset Password';
include "connection.php";
include "modals/navbar.php";
include 'modals/pass_reset.php';

if (isset($_POST['submit'])) {
	if (mysqli_query($db, "UPDATE student SET password='$_POST[password]' WHERE username='$_POST[username]'
			AND email='$_POST[email]' ;")) {
?>
		<script type="text/javascript">
			alert("The Password Updated Successfully.");
		</script>

<?php
	}
}
include 'modals/footer.php'
?>
