<?php
$title = 'Borrowed Books';
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
  <!-- SideBar -->
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
    <br><br>
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
  <div class="container">
    <h3 style="text-align: center;">Information of Borrowed Books</h3><br>
    <?php
    $c = 0;
    if (isset($_SESSION['login_user'])) {
      $sql = "SELECT student.username,roll,books.bid,name,authors,ebook,edition,issue,issue_book.return FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.username ='$_SESSION[login_user]' and issue_book.approve !='' ORDER BY `issue_book`.`return` ASC";
      $res = mysqli_query($db, $sql); ?>
      <!-- Borrowed Books Table -->
      <div class="container">
        <table class="table table-striped table-light">
          <thead>
            <tr>
              <th scope="col">Username</th>
              <th scope="col">Roll No</th>
              <th scope="col">BID</th>
              <th scope="col">Book Name</th>
              <th scope="col">Author/s Name</th>
              <th scope="col">Edition</th>
              <th scope="col">Issue Date</th>
              <th scope="col">Return Date</th>
              <th scope="col">E-Book</th>
            </tr>
          </thead>
          <tbody>
            <?php

            while ($row = mysqli_fetch_assoc($res)) { ?>
              <tr>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['roll'] ?></td>
                <td><?php echo $row['bid'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['authors'] ?></td>
                <td><?php echo $row['edition'] ?></td>
                <td><?php echo $row['issue'] ?></td>
                <td><?php echo $row['return'] ?></td>
                <td><a href="<?php echo $row['ebook'] ?>"><i class="bi bi-arrow-right-square-fill text-indigo-500"></i></a></td>
              </tr>
          <?php }
          } ?>
          </tbody>
        </table>
      </div>
</section>
