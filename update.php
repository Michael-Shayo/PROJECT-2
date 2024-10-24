<?php include 'connect.php';
$id=$_GET['id'];
$select="SELECT * FROM user WHERE id='$id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data)
?>
<div>
<form action="" method="post">
    <input value="<?php echo $row['firstname'] ?>" type="text" name="firstname" placeholder="firstname"><br><br>
    <input value="<?php echo $row['lastname'] ?>" type="text" name="lastname" placeholder="lastname"><br><br>
    <input value="<?php echo $row['age'] ?>" type="number" name="age" placeholder="age"><br><br>
    <input type="submit" name="update_btn" value="update">
    
<button type="button"><a href="view.php">back</a></button>
</form>
    </div>

    <?php
  if(isset($_POST["update_btn"])){
    $fname=$_POST["firstname"];
    $lname=$_POST["lastname"];
    $age=$_POST["age"];

    $update="UPDATE user SET firstname='$fname',lastname='$lname',age='$age' WHERE id='$id'";

    $data=mysqli_query($con,$update);

    if($data){
        ?>
        <script type="text/javascript">
            alert ("data updated succesfully");
            window.open("http://localhost/PROJECT 1/view.php","_self");
      </script>
  <?php
    }
    else {
   ?>     
        <script type="text/javascript">
        alert ("please try again");
        </script>
    <?php    
    }     
  }
  ?>  