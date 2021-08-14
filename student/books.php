


<?php
$title = 'Books';
include "connection.php";
include "modals/navbar.php";
?>
<style type="text/css">
	.sidenav {
		height: 100%;
		margin-top: 50px;
		width: 0;
		position: fixed;
		z-index: 1;
		top: 0;
		left: 0;
		background-color: #222;
		overflow-x: hidden;
		transition: 0.5s;
		padding-top: 60px;
	}

	.sidenav a {
		padding: 8px 8px 8px 32px;
		text-decoration: none;
		font-size: 25px;
		color: #818181;
		display: block;
		transition: 0.3s;
	}

	.sidenav a:hover {
		color: white;
	}

	.sidenav .closebtn {
		position: absolute;
		top: 0;
		right: 25px;
		font-size: 36px;
		margin-left: 50px;
	}

	@media screen and (max-height: 450px) {
		.sidenav {
			padding-top: 15px;
		}

		.sidenav a {
			font-size: 18px;
		}
	}

	.img-circle {
		margin-left: 20px;
	}

	.h:hover {
		color: white;
		width: 300px;
		height: 50px;
		background-color: #00544c;
	}
</style>

<section class="p-5">
	<!-- Sidebar -->
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<div style="color: white; margin-left: 60px; font-size: 20px;">

			<?php
			if (isset($_SESSION['login_user'])) {
				echo "<img class='img-circle profile_img' height=120 width=120 src='images/" . $_SESSION['pic'] . "'>";
				echo "</br></br>";

				echo "Welcome " . $_SESSION['login_user'];
			}
			?>
		</div>
		<br>
		<br>
		<div class="h"> <a href="request.php">Book Request</a></div>
		<div class="h"> <a href="issue_info.php">Issue Information</a></div>
		<div class="h"><a href="expired.php">Expired List</a></div>
	</div>

	<!-- SideBar JavaScript -->
	<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
	<script>
		function openNav() {
			document.getElementById("mySidenav").style.width = "300px";
			document.getElementById("main").style.marginLeft = "300px";
			document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
		}

		function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
			document.getElementById("main").style.marginLeft = "0";
			document.body.style.backgroundColor = "white";
		}
	</script>
	<!-- Books Search Form -->
	<div class="container ms-auto">
		<form class="navbar-form p-3" method="post" name="form1">
			<input class="form-control mb-2" type="text" name="search" placeholder="Enter Book name" required="">
			<button type="submit" name="submit" class="btn btn-dark">Search</button>
		</form>
	</div>
	<!-- Request Book Form -->
	<div class="container ms-auto">
		<form class="navbar-form p-3" method="post" name="form1">
			<input class="form-control mb-2" type="text" name="bid" placeholder="Enter Book ID" required="">
			<button type="submit" name="submit1" class="btn btn-dark">Request</button>
		</form>
	</div>
	<!-- Books Table -->
	<div class="container">
		<p class="h1 text-indigo-500">List of Books</p>
		<?php
		if (isset($_POST['submit'])) {
			$q = mysqli_query($db, "SELECT * from books where name like '%$_POST[search]%' ");

			if (mysqli_num_rows($q) == 0) {
				echo "Sorry! No book found. Try searching again.";
			} else { ?>
				<table class="table">
					<thead class="table-indigo-500">
						<tr>
							<th scope="col"><?php echo 'ID' ?></th>
							<th scope="col"><?php echo 'Book-Name' ?></th>
							<th scope="col"><?php echo 'Authors Name' ?></th>
							<th scope="col"><?php echo 'Edition' ?></th>
							<th scope="col"><?php echo 'Status' ?></th>
							<th scope="col"><?php echo 'Quantity' ?></th>
							<th scope="col"><?php echo 'course' ?></th>
						</tr>
					</thead>
					<tbody>
						<?php while ($row = mysqli_fetch_assoc($q)) { ?>
							<tr>
								<th scope="row"><?php echo $row['bid'] ?></th>
								<td><?php echo $row['name'] ?></td>
								<td><?php echo $row['authors'] ?></td>
								<td><?php echo $row['edition'] ?></td>
								<td><?php echo $row['status'] ?></td>
								<td><?php echo $row['quantity'] ?></td>
								<td><?php echo $row['course'] ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			<?php
			}
		}
		// If Button is Not Pressed
		else {
			$res = mysqli_query($db, "SELECT * FROM `books` ORDER BY `books`.`name` ASC;"); ?>
			<table class="table">
				<thead class="table-indigo-500">
					<th scope="col"><?php echo 'ID' ?></th>
					<th scope="col"><?php echo 'Book-Name' ?></th>
					<th scope="col"><?php echo 'Authors Name' ?></th>
					<th scope="col"><?php echo 'Edition' ?></th>
					<th scope="col"><?php echo 'Status' ?></th>
					<th scope="col"><?php echo 'Quantity' ?></th>
					<th scope="col"><?php echo 'course' ?></th>
				</thead>
				<tbody>
					<?php while ($row = mysqli_fetch_assoc($res)) { ?>
						<tr>
							<th scope="row"><?php echo $row['bid'] ?></th>
							<td><?php echo $row['name'] ?></td>
							<td><?php echo $row['authors'] ?></td>
							<td><?php echo $row['edition'] ?></td>
							<td><?php echo $row['status'] ?></td>
							<td><?php echo $row['quantity'] ?></td>
							<td><?php echo $row['course'] ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php }
		if (isset($_POST['submit1'])) {
			if (isset($_SESSION['login_user'])) {
				mysqli_query($db, "INSERT INTO issue_book Values('$_SESSION[login_user]', '$_POST[bid]', '', '', '');"); ?>
				<script type="text/javascript">
					window.location = "request.php"
				</script>
			<?php } else { ?>
				<script type="text/javascript">
					alert("You must login to Request a book");
				</script>
		<?php }
		} ?>
	</div>
</section>
<?php
include 'modals/footer.php';
?>