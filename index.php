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

<!-- Table Start -->

<div class="w-75 auto my-4">
    <?php
    include('conn.php');
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);

    if($row > 0){
      
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Father Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
            while ($row = mysqli_fetch_assoc($result)){
                ?>

            
            <tr>
                <th scope="row"><?php echo $row['sid']?></th>
                <td><?php echo $row['sname']?></td>
                <td><?php echo $row['fname']?></td>
                <td><?php echo $row['age']?></td>
                <td><?php echo $row['phone']?></td>
                <td><?php echo $row['email'] ?></td>
                <td>
                    <!-- Edit button -->
                    <a href="edit.php?stdid=<?php echo $row['sid'];?>">
                    <button type="button" class="btn btn-dark"> Edit</button>
                </a>
                    <!-- Delete button -->
                    <a href="delete.php?stdid=<?php echo $row['sid'];?>">
                    <button type="button" class="btn btn-danger">Delete</button>
                </a>
                </td>
            </tr>

            <?php
            }
            ?>

            
            </tbody>
        </table>
        <?php
    } else{
        echo "<h3>No Student Found</h3>";
        mysqli_close($conn);
    }
    ?>
</div>

<!-- Table End -->
    
</body>
</html>