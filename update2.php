<?php include 'connect.php'; 
$id = $_GET['id'];
$select = "SELECT * FROM user WHERE id='$id'";
$data = mysqli_query($con, $select);
$row = mysqli_fetch_array($data)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/
    bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Edit User</title>
</head>
<body>
    <div class="container mt-5">
        <form action="" method="post">
            <div class="form-group">
                <input value="<?php echo $row['firstname'] ?>" type="text" name="firstname" class="form-control" placeholder="First Name" required>
            </div>
            <div class="form-group">
                <input value="<?php echo $row['lastname'] ?>" type="text" name="lastname" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="form-group">
                <input value="<?php echo $row['age'] ?>" type="number" name="age" class="form-control" placeholder="Age" required>
            </div>
            <button type="submit" name="update_btn"  class="btn btn-primary">Update</button>
            <a href="view.php" class="btn btn-secondary">Back</a>
        </form>
    </div>

    <?php
    if(isset($_POST["update_btn"])){
        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $age = $_POST["age"];

        $update = "UPDATE user SET firstname='$fname', lastname='$lname', age='$age' WHERE id='$id'";

        $data = mysqli_query($con, $update);

        if($data){
    ?>
            <script type="text/javascript">
                alert ("Data updated successfully");
                window.open("http://localhost/PROJECT 1/view.php","_self");
            </script>
    <?php
        } else {
    ?>     
            <script type="text/javascript">
                alert ("Please try again");
            </script>
    <?php    
        }     
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
