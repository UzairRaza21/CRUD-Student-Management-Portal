<?php
include("conn.php");
$sid = $_GET["stdid"];

$sql = "SELECT * FROM students WHERE sid= {$sid}";
$result = mysqli_query($conn, $sql) or die('Falied to fetch student');
 

if (isset($_POST['subBtn'])) {
  include("conn.php");
  $sname = $_POST['sname'];
  $fname = $_POST['fname'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $sql = "UPDATE students SET sname='$sname', fname = '$fname', age = '$age', email= '$email', phone= '$phone' WHERE sid=$sid";
  
  $result = mysqli_query($conn, $sql) or die('Falied to fetch student');

  mysqli_close($conn);
  header("location: index.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <title>Student Management Portal</title>
</head>

<body>

  <!-- Nav Start -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Student Management Portal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./addStudent.php">Add Student</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  
  <!-- Nav End -->

  <?php
  $row = mysqli_num_rows($result);
  if ($row > 0) {
    $student = mysqli_fetch_assoc($result);
  ?>

    <!-- Form Start -->
    <Form method="post">
      <label for="">
        Student Name:
        <input type="text" name="sname" id="sname" value="<?php echo $student['sname'] ?>">
      </label><br><br>
      <label for="">
        Father Name:
        <input type="text" name="fname" id="fname" value="<?php echo $student['fname'] ?>">
      </label><br><br>
      <label for="">
        Age:
        <input type="number" name="age" id="age" value="<?php echo $student['age'] ?>">
      </label><br><br>
      <label for="">
        Email:
        <input type="email" name="email" id="email" value="<?php echo $student['email'] ?>">
      </label><br><br>
      <label for="">
        Phone:
        <input type="number" name="phone" id="phone" value="<?php echo $student['phone'] ?>">
      </label><br><br>

      <input type="submit" name="subBtn" id="subBtn" value="Update Student">


    </Form>

    <!-- Form End -->

  <?php
  } else {
    echo "Failed to fetch student data";
  }

  ?>



</body>

</html>