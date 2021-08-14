<?php
$title = 'Approve Request';
include "connection.php";
include "modals/navbar.php";
?>
<style type="text/css">
  .form-control {
    width: 300px;
    height: 45px;
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

  .Approve {
    margin-left: 420px;
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
    <div class="h"><a href="expired.php">Expired List</a></div>
  </div>
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
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
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
      <div class="max-w-md w-full space-y-8">
        <div>
          <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Approve Book</h2>
        </div>
        <form class="mt-8 space-y-6" method="POST">
          <input type="hidden" name="remember" value="true">
          <div class="rounded-md shadow-sm -space-y-px">
            <!-- Approve -->
            <div>
              <label for="approve" class="sr-only">Yes</label>
              <input id="approve" name="approve" type="text" autocomplete="approve" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Yes">
            </div>
            <!-- Issue Date -->
            <div>
              <label for="issue" class="sr-only">Issue Date</label>
              <input id="issue" name="issue" type="text" autocomplete="issue" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Issue Date (YYYY-MM-DD)">
            </div>
            <!-- Return Date -->
            <div>
              <label for="return" class="sr-only">Return Date</label>
              <input id="return" name="return" type="text" autocomplete="return" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Return Date (YYYY-MM-DD)">
            </div>
          </div>
          <div>
            <button type="submit" name="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Approve</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php
  if (isset($_POST['submit'])) {
    mysqli_query($db, "UPDATE  `issue_book` SET  `approve` =  '$_POST[approve]', `issue` =  '$_POST[issue]', `return` =  '$_POST[return]' WHERE username='$_SESSION[name]' and bid='$_SESSION[bid]';");

    mysqli_query($db, "UPDATE books SET quantity = quantity-1 where bid='$_SESSION[bid]' ;");

    $res = mysqli_query($db, "SELECT quantity from books where bid='$_SESSION[bid];");

    while ($row = mysqli_fetch_assoc($res)) {
      if ($row['quantity'] == 0) {
        mysqli_query($db, "UPDATE books SET status='not-available' where bid='$_SESSION[bid]';");
      }
    }
  ?>
    <script type="text/javascript">
      alert("Updated successfully.");
      window.location = "request.php"
    </script>
  <?php
  }
  ?>
</section>
<?php
include 'modals/footer.php';
?>