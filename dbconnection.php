<?php
$server = "localhost:3306";
$user = "root";
$password = "";
$db = "educationhub";

$conn = mysqli_connect($server, $user, $password, $db);

if($conn) {
  echo "Connection Successfull";
  ?>
   <script>
       alert("connection Successfull.");
   </script>
  <?php
} else{
       
    echo("Connection not successful.");

    ?>
   <script>
   alert("Connection not found.");
   </script>
    <?php
}

//mysqli_select_db($conn, 'educationhub');

if (isset($_POST['submit'])) {
  $fullname = $_POST['name'];
$emails = $_POST['email'];
$comment = $_POST['comments'];
}

$querry = "INSERT INTO enquiry(fullname, emails, comment)VALUES('$fullname', '$emails', '$comment')";

mysqli_query($conn, $querry);

header('location:edu.php');
?>