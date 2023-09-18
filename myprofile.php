<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         center h1{
            font-weight: bolder;
            color: darksalmon;
        }
        body{
            background-image: url("https://idyllwildarts.org/wp-content/uploads/2017/06/6-30-2017-blog-image.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        table{
            
            /* background-image: url("https://th.bing.com/th/id/R.05f2589a9f889f657d3c76f992c83f57?rik=JYWMlYErY4LSKw&riu=http%3a%2f%2fwww.heartlandroundup.com%2ffiles%2fQuickSiteImages%2fbackground.jpg&ehk=Wv2nAEa0Rl9WEIMAob1fgfbqHoSndbdc6Ef69GgMLHI%3d&risl=&pid=ImgRaw&r=0"); */
            /* background-size: cover; */
            color: blue;
            font-weight: bold;
            background-color: beige;
            /* width: 75vh; */
        }
    </style>
</head>


<body>
<?php

include("headeruser.php");
include_once("conn.php");
$email=$_GET["email"];
$sql="SELECT * FROM students WHERE email='$email'";
$data=mysqli_query($connection,$sql);
$num=mysqli_num_rows($data);
$row=mysqli_fetch_array($data)

?>


    <center><h1>MY PROFILE</h1></center>
    <form action=""method='post'>
    <center><table allign=center>
            <tr>
                <td>First Name</td>
                <td >  <input type="text" name="fname" value="<?php echo $row["fname"];?>"></td>
            </tr>
            <tr>
                <td>Last name</td>
                <td >  <input type="text" name="lname" value="<?php echo $row["lname"];?>"></td>
            </tr>
            <tr>
                <td>E-Mail</td>
                <td >  <input type="email" name="email" value="<?php echo $row["email"];?>"></td>
            </tr>
              
            <tr>
                <td>DOB</td>
                <td>  <input type="date" name="dob" value="<?php echo $row["dob"];?>"></td>
                
            </tr>
            <tr>
                <td>Gender</td>
                <td ><select name="gen" id="" value="<?php echo $row["gender"];?>">
                    <option value="male">male</option>
                    <option value="female">femle</option>
                    <option value="other">other</option>
                   </select> </td>
            </tr>
            <tr>
                <td>Ph_no</td>
                <td ><input type="number"name="phn" value="<?php echo $row["ph_no"];?>"></td>
            </tr>

          
            <tr>
                <td>Address</td>
                <td><input type="text"name="adrs" value="<?php echo $row["address"];?>"></td>
            </tr>
            <!-- <tr>
                <td>Password</td>
                <td><input type="text"name="pss" value="<?php echo $row["pass"];?>"></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="text"name="cpss" value="<?php echo $row["cpass"];?>"></td>
            </tr> -->
            <tr>
            <tr>
                
                <td><button type="submit" value ="submit" name="ok">UPDATE</button></td>
            </tr>
            

        </table></center>
    </form>
</body>
<?php
if(isset($_POST["ok"])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $genter=$_POST['gen']; 
    $ph_no=$_POST['phn'];  
  
    $uaddress=$_POST['adrs']; 
    // $pass=$_POST['pss'];  
    // $lpass=password_hash($pass,PASSWORD_DEFAULT);  
    // $cpass=$_POST['cpss'];
$sql2="UPDATE students SET fname='$fname',lname='$lname',email='$email',dob='$dob',gender='$genter',ph_no='$ph_no',address='$uaddress' WHERE email='$email'";
$result=mysqli_query($connection,$sql2);
if($result){
    ?>
    <script>
        alert("updated");
     window.open("http://localhost/PHP/project/roomdetails.php?email=<?php echo$email ?>","_self");

    </script>
    <?php

}
}

?>
</html>