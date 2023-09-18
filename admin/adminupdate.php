<?php
include_once("conn.php");
$id=$_GET['email'];
$sql="SELECT * FROM students WHERE email='$id'";
$data=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($data);
?>
<html>
    <head></head>
    <body>
        <?php 
        include("headeradmin.php");
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" name="id" placeholder="Id" value="<?php echo$row['id'];?>"><br><br>
            <input type="text" name="f_name" placeholder="First Name" value="<?php echo$row['fname'];?>"><br><br>
            <input type="text" name="l_name" placeholder="Last Name" value="<?php echo$row['lname'];?>"><br><br>
            <input type="text" name="email" placeholder="E-Mail" value="<?php echo$row['email'];?>"><br><br>
            <input type="text" name="phone_no" placeholder="Phone Number" value="<?php echo$row['ph_no'];?>"><br><br>
            
            <input type="text" name="address" placeholder="Address" value="<?php echo$row['address'];?>"><br><br>
            <input type="text" name="roomno" placeholder="Room No" value="<?php echo$row['room_no'];?>"><br><br>
            <input type="text" name="duration" placeholder="Duration" value="<?php echo$row['duration'];?>"><br><br>
            <input type="text" name="h_fee" placeholder="Hostel Fee" value="<?php echo$row['h_fee'];?>"><br><br>
            <input type="text" name="f_fee" placeholder="Food Fee" value="<?php echo$row['f_fee'];?>"><br><br>
            
            <input type="submit" name="update"  value="Update"><br><br>
        </form>
        <?php
        if(isset($_POST['update']))
        {
            $f_name=$_POST['f_name'];
            $l_name=$_POST['l_name'];
            $email=$_POST['email'];
            $phone_no=$_POST['phone_no'];
            $address=$_POST['address'];
            $roomno=$_POST['roomno'];
            $duration=$_POST['duration'];
            $hfee=$_POST['h_fee'];
            $ffee=$_POST['f_fee'];
            /*$image_name = $_FILES["img"]['name'];
            $image_tmp_name = $_FILES['img']['tmp_name'];*/
            $sql2="UPDATE students SET fname='$f_name',lname='$l_name',email='$email',ph_no='$phone_no',address='$address',room_no='$roomno',duration='$duration',h_fee='$hfee',f_fee='$ffee' WHERE email='$id'";
            $result=mysqli_query($connection,$sql2);
            
            if($result){
                echo"Sucess";
                ?>
                <script>
                    window.open('http://localhost/php/project/admin/studentsprofile.php?email=<?php echo$id?>','_self')
                </script>
                <?php
                // header("location:admin/studentsprofile.php?email='$email'");
            }else{
                die("Could not update!!");
            }
        }
        ?>
        
    </body>
</html>