<?php
include_once('conn.php');
if(isset($_POST['ok']))
{
    $fname=$_POST['fnam'];
    $lname=$_POST['lnam'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $genter=$_POST['gen']; 
    $ph_no=$_POST['phn'];  
  
    $uaddress=$_POST['adrs']; 
    $pass=$_POST['pss'];  
    $lpass=password_hash($pass,PASSWORD_DEFAULT);  
    $cpass=$_POST['cpss'];

    
    $sql="INSERT INTO students(fname,lname,email,dob,gender,ph_no,address,pass,cpass)VALUES('$fname','$lname','$email','$dob','$genter','$ph_no','$uaddress','$lpass','$cpass')";
    $result=mysqli_query($connection,$sql);
if($result){

    // echo "data inserted successfullY";
    ?>
<script>
    alert("Data Inserted Successfully");
    window.open("http://localhost/PHP/project/admin/studentsprofile.php?email=<?php echo$email ;?>")
</script>
    <?php
    
}
else{
    echo "error ".mysqli_error($connection);
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student registration/admin</title>
    <style>
        .main h1{
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
    include("headeradmin.php");
    ?>
    <div class="main">
    <center><h1 allign=center>Add New Student</h1></center>
    <form action=""method='post'>
        <center><table >
            <tr>
                <td>First Name</td>
                <td ><input type="text"name="fnam"></td>
            </tr>
            <tr>
                <td>Last name</td>
                <td ><input type="text"name="lnam"></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td ><input type="text"name="email"></td>
            </tr>
              
            <tr>
                <td>DOB</td>
                <td><input type="date" name="dob"></td>
                
            </tr>
            <tr>
                <td>Gender</td>
                <td ><select name="gen" id="">
                    <option value="male">male</option>
                    <option value="female">femle</option>
                    <option value="other">other</option>
                   </select> </td>
            </tr>
            <tr>
                <td>Ph_no</td>
                <td ><input type="number"name="phn"></td>
            </tr>

          
            <tr>
                <td>Address</td>
                <td><input type="text"name="adrs"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password"name="pss"></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password"name="cpss"></td>
            </tr>
            <tr>
            <tr>
                
                <td><button type="submit" value ="submit" name="ok">submit</button></td>
            </tr>
            

        </table></center>
    </form>
    </div>
</body>
</html>