<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>User Table</title>
</head>
<body>
    <div class="container mt-5">
        <a href="index.php" class="btn btn-primary mb-3">HOME</a>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Age</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM user";
                $data = mysqli_query($con, $query);
                $result = mysqli_num_rows($data);

                if ($result) {
                    while($row = mysqli_fetch_array($data)){
                ?>
                    <tr>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><a href="update2.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td>
                        <td><a onclick="return confirm('Are you sure you want to Delete')" href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php   
                    }
                } else {
                ?>
                    <tr>
                        <td colspan="5">No Record found</td>
                    </tr>
                <?php   
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
