<?php
$title = 'Feedback';
include "connection.php";
include "modals/navbar.php";
?>

<section class="p-5">
	<div class="container">
		<p class="h1 text-indigo-500">If you have any suggesions or questions please comment below.</p>
		<form method="POST" class="mb-2">
			<input class="form-control" type="text" name="comment" placeholder="Write something..."><br>
			<button class="btn btn-dark btn-lg" type="submit" name="submit">Comment</button>
		</form>
	</div>
	<div class="container">
		<?php
		if (isset($_POST['submit'])) {
			$sql = "INSERT INTO `comments` VALUES('', '$_SESSION[login_user]', '$_POST[comment]');";
			if (mysqli_query($db, $sql)) {
				$q = "SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
				$res = mysqli_query($db, $q); ?>
				<table class="table">
					<?php while ($row = mysqli_fetch_assoc($res)) { ?>
						<tr>
							<td><?php echo $row['username'] ?></td>
							<td><?php echo $row['comment'] ?></td>
						</tr>
					<?php } ?>
				</table>
			<?php
			}
		} else {
			$q = "SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
			$res = mysqli_query($db, $q); ?>
			<table class="table">
				<?php while ($row = mysqli_fetch_assoc($res)) { ?>
					<tr>
						<td><?php echo $row['username'] ?></td>
						<td><?php echo $row['comment'] ?></td>
					</tr>
				<?php } ?>
			</table>
		<?php
		}
		?>
	</div>
</section>

<?php include 'modals/footer.php' ?>