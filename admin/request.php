<?php
$title = 'Book Request';
include "connection.php";
include "modals/navbar.php";
?>
<style type="text/css">
	.form-control {
		width: 300px;
		height: 40px;
		background-color: black;
		color: white;
	}

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
		</div><br><br>
		<div class="h"> <a href="books.php">Books</a></div>
		<div class="h"> <a href="request.php">Book Request</a></div>
		<div class="h"> <a href="issue_info.php">Issue Information</a></div>
		<div class="h"><a href="expired.php">Expired List</a></div>
	</div>
	<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
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
	<br>
    <?php
	  if(isset($_SESSION['login_user']))
	  {
		  ?>
	<div class="container">
		<form method="post" action="" name="form1">
			<input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
			<input type="text" name="bid" class="form-control" placeholder="BID" required=""><br>
			<button class="btn btn-dark" name="submit" type="submit">Submit</button><br>
		</form>
	</div>
	  
	  <?php 
	  } ?>
	<div class="container">
		<p class="h1 text-indigo-500 text-center">Request of Books</p>
		<?php
		if (isset($_SESSION['login_user'])) {
			$sql = "SELECT student.username,roll,books.bid,name,authors,edition,status FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.approve =''";
			$res = mysqli_query($db, $sql);
			if (mysqli_num_rows($res) == 0) {
				echo "<h2><b>";
				echo "There's no pending request.";
				echo "</h2></b>";
			} else { ?>
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Username</th>
							<th scope="col">Roll No</th>
							<th scope="col">BID</th>
							<th scope="col">Book Name</th>
							<th scope="col">Authors Name</th>
							<th scope="col">Edition</th>
							<th scope="col">Status</th>
						</tr>
					</thead>
					<tbody>
						<?php while ($row = mysqli_fetch_assoc($res)) { ?>
							<tr>
								<td><?php echo $row['username']  ?></td>
								<td><?php echo $row['roll']  ?></td>
								<td><?php echo $row['bid']  ?></td>
								<td><?php echo $row['name']  ?></td>
								<td><?php echo $row['authors']  ?></td>
								<td><?php echo $row['edition']  ?></td>
								<td><?php echo $row['status']  ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			<?php
			}
		} else {
			?>
			<br>
			<h4 style="text-align: center">You need to login to see the request.</h4>
		<?php
		}
		if (isset($_POST['submit'])) {
			$_SESSION['name'] = $_POST['username'];
			$_SESSION['bid'] = $_POST['bid'];
		?>
			<script type="text/javascript">
				window.location = "approve.php"
			</script>
		<?php
		}
		?>
	</div>
</section>
