<?php
include_once("conn.php");
$id=$_GET['id'];
$query="DELETE FROM students WHERE id='$id'";
$data=mysqli_query($connection,$query);
if($data){
    ?>
    <script type="text/javascript">
        alert("Data deleted successfully! ");
        window.open("//localhost/PHP/project/admin/studentsprofile.php");
    </script>
    <?php
}
else{
    ?>
    <script>
        alert("Please try again!!");
        window.open("//localhost/PHP/project/admin/studentsprofile.php");
    </script>

    <?php
}
?>
