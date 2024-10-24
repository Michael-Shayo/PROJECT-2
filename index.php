<?php include "connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="style.css">-->
    <title>FORM</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">User Information</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" name="firstname" class="form-control" placeholder="First Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="lastname" class="form-control" placeholder="Last Name" required>
                            </div>
                            <div class="form-group">
                                <input type="number" name="age" class="form-control" placeholder="Age" required>
                            </div>
                            <button type="submit" name="save_btn" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                    <br>
<button type="button"><a href="view.php">view data</a></button>
                </div>
            </div>
            <br>
<button type="button"><a href="view.php">view data</a></button>
        </div>
    </div>

    <?php
    if(isset($_POST["save_btn"])){
        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $age = $_POST["age"];

        $query = "INSERT INTO user(firstname, lastname, age) VALUES ('$fname', '$lname', '$age')";

        $data = mysqli_query($con, $query);

        if($data){
    ?>
            <script type="text/javascript">
                alert("Data saved");
            </script>
    <?php
        } else {
    ?>     
            <script type="text/javascript">
                alert("Please try again");
            </script>
    <?php    
        }     
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <script src="/js/bootstrap.bundle.js"></script>
     <script src="js/bootstrap.min.js"></script>
</body>
</html>
