<?php
$title = 'Student Registration';
include "connection.php";
include "modals/navbar.php";
include "modals/student_registration.php" ?>

<?php
if (isset($_POST['submit'])) {
  $count = 0;
  $sql = "SELECT username from `student`";
  $res = mysqli_query($db, $sql);
  while ($row = mysqli_fetch_assoc($res)) {
    if ($row['username'] == $_POST['username']) {
      $count = $count + 1;
    }
  }
  if ($count == 0) {
    mysqli_query($db, "INSERT INTO `student` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[roll]', '$_POST[email]', '$_POST[contact]', 'p.jpg');");
?>
    <script type="text/javascript">
      alert("Registration successful");
    </script>
  <?php
  } else {

  ?>
    <script type="text/javascript">
      alert("The username already exist.");
    </script>
<?php

  }
}
include "modals/footer.php" ?>