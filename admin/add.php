<?php
$title = 'Add Books';
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

  .book {
    width: 400px;
    margin: 0px auto;
  }

  .form-control {
    background-color: #080707;
    color: white;
    height: 40px;
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
    <div class="h"> <a href="add.php">Add Books</a> </div>
    <div class="h"> <a href="request.php">Book Request</a></div>
    <div class="h"> <a href="issue_info.php">Issue Information</a></div>
  </div>
  <span style="font-size:30px;cursor:pointer; color: black;" onclick="openNav()">&#9776; open</span>

  <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
      <!-- Heading -->
      <div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Add New Books</h2>
      </div>
      <!-- Form -->
      <form class="mt-8 space-y-6" method="POST">
        <input type="hidden" name="remember" value="true">
        <div class="rounded-md shadow-sm -space-y-px">
          <!-- BID -->
          <div>
            <label for="bid" class="sr-only">Book ID</label>
            <input id="bid" name="bid" type="text" autocomplete="bid" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Book ID">
          </div>
          <!-- Book Name -->
          <div>
            <label for="bookName" class="sr-only">Book Name</label>
            <input id="bookName" name="name" type="text" autocomplete="name" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Book Name">
          </div>
          <!-- Authors Name -->
          <div>
            <label for="authors" class="sr-only">Authors Name</label>
            <input id="authors" name="authors" type="text" autocomplete="authors" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Authors Name">
          </div>
          <!-- Edition -->
          <div>
            <label for="edition" class="sr-only">Edition</label>
            <input id="edition" name="edition" type="text" autocomplete="edition" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Edition">
          </div>
          <!-- Status -->
          <div>
            <label for="status" class="sr-only">Status</label>
            <input id="status" name="status" type="text" autocomplete="status" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Status">
          </div>
          <!-- Quantity -->
          <div>
            <label for="quantity" class="sr-only">Quantity</label>
            <input id="quantity" name="quantity" type="text" autocomplete="quantity" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Quantity">
          </div>
          <!-- course -->
          <div>
            <label for="course" class="sr-only">course</label>
            <input id="course" name="course" type="text" autocomplete="course" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="course">
          </div>
          <!-- ebook -->
          <div>
            <label for="ebook" class="sr-only">ebook</label>
            <input id="ebook" name="ebook" type="text" autocomplete="ebook" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="ebook">
          </div>
        </div>
        <div>
          <button type="submit" name="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">ADD</button>
        </div>
      </form>
    </div>
  </div>

  <?php
  if (isset($_POST['submit'])) {
    if (isset($_SESSION['login_user'])) {
      mysqli_query($db, "INSERT INTO books VALUES ('$_POST[bid]', '$_POST[name]', '$_POST[authors]', '$_POST[edition]', '$_POST[status]', '$_POST[quantity]', '$_POST[course]', '$_POST[ebook]') ;");
  ?>
      <script type="text/javascript">
        alert("Book Added Successfully.");
      </script>

    <?php

    } else {
    ?>
      <script type="text/javascript">
        alert("You need to login first.");
      </script>
  <?php
    }
  }
  ?>

  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "300px";
      document.getElementById("main").style.marginLeft = "300px";
      document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
      document.body.style.backgroundColor = "#024629";
    }
  </script>
</section>
<?php
include 'modals/footer.php';
?>