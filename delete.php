<?php 
include 'connect.php';
$id = $_GET['id'];
$query = "DELETE FROM user WHERE id='$id'";
$data = mysqli_query($con, $query);

if ($data){
    ?>
    <script type="text/javascript">
        alert("data deleted successfully");
        window.open("http://localhost/PROJECT 1/view.php","_self");
    </script>
    <?php
}
else {
    ?>
    <script type="text/javascript">
        alert("please try again");
        window.open("http://localhost/PROJECT 1/view.php","_self");
    </script>
    <?php
}
?>
