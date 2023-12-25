<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Add Student</title>
</head>
<body>
    <!-- Nav Bar Start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Student Management Portal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
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

    <!-- Nav-Bar End -->

<!-- Form Start -->
<Form method= "post" action="insert.php" >
    <label for="">
        Student Name:
        <input type="text" name="sname" id="sname">
    </label><br><br>
    <label for="">
        Father Name:
        <input type="text" name="fname" id="fname">
    </label><br><br>
    <label for="">
        Age:
        <input type="number" name="age" id="age">
    </label><br><br>
    <label for="">
        Email:
        <input type="email" name="email" id="email">
    </label><br><br>
    <label for="">
        Phone:
        <input type="number" name="phone" id="phone">
    </label><br><br>

    <input type="submit" name="subBtn" id="subBtn" value="Add Student">


</Form>

<!-- Form End -->



</body>
</html>