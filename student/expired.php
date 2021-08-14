<?php
$title = 'Expired Books';
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
    </div><br><br>
    <div class="h"> <a href="books.php">Books</a></div>
    <div class="h"> <a href="request.php">Book Request</a></div>
    <div class="h"> <a href="issue_info.php">Issue Information</a></div>
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
    <?php
    if (isset($_SESSION['login_user'])) {
    ?>

      <div style="float: left; padding-left:  5px; padding-top: 20px;">
        <form method="post" action="">
      
          &nbsp&nbsp
          <button name="submit3" type="submit" class="btn btn-default" style="background-color: red; color: yellow;">EXPIRED</button>
        </form>
      </div>
      <div style="float: right;padding-top: 10px;">

        <?php
        $var = 0;
        $result = mysqli_query($db, "SELECT * FROM `fine` where username='$_SESSION[login_user]' and status='not paid' ;");
        while ($r = mysqli_fetch_assoc($result)) {
          $var = $var + $r['fine'];
        }
        $var2 = $var + $_SESSION['fine'];

        ?>
        
      </div>
      <br><br><br><br>
    <?php
    }


  
    $exp = '<p style="color:yellow; background-color:red;">EXPIRED</p>';

    if (isset($_POST['submit2'])) {

      $sql = "SELECT student.username,roll,books.bid,name,authors,edition,approve,issue,issue_book.return FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.approve ='$ret' and issue_book.username ='$_SESSION[login_user]'  ORDER BY `issue_book`.`return` DESC";
      $res = mysqli_query($db, $sql);
    } else if (isset($_POST['submit3'])) {
      $sql = "SELECT student.username,roll,books.bid,name,authors,edition,approve,issue,issue_book.return FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.approve ='$exp' and issue_book.username ='$_SESSION[login_user]' ORDER BY `issue_book`.`return` DESC";
      $res = mysqli_query($db, $sql);
    } 
    else {
      $sql = "SELECT student.username,roll,books.bid,name,authors,edition,approve,issue,issue_book.return FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.approve !='' and issue_book.approve !='Yes'  and issue_book.username ='$_SESSION[login_user]' ORDER BY `issue_book`.`return` DESC";
      $res = mysqli_query($db, $sql);
    } ?>

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
          <th scope="col">Issue Date</th>
          <th scope="col">Return Date</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_assoc($res)) { ?>
          <tr>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['roll'] ?></td>
            <td><?php echo $row['bid'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['authors'] ?></td>
            <td><?php echo $row['edition'] ?></td>
            <td><?php echo $row['approve'] ?></td>
            <td><?php echo $row['issue'] ?></td>
            <td><?php echo $row['return'] ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</section>


