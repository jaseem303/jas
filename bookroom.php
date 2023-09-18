<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
                table tr{
            border: 2px solid red;
        }
        table td{
            border: 2px solid red;
        }
        table th{
            border:  2px solid red;
        }

        body{
    /* background-image: url("https://th.bing.com/th/id/OIP.sK7jTIwEuB5u4JfNP48vuQHaE9?pid=ImgDet&w=179&h=119&c=7&dpr=1.5"); */
    background-image: url("https://th.bing.com/th/id/R.c2e32d5300b3089181f2b6162f27ea97?rik=QfpACC45qXjxiQ&riu=http%3a%2f%2fmangotreehostel.com%2fwp-content%2fuploads%2f2017%2f07%2fmango-tree-hostel-rio-de-janeiro-quadruple-deluxe-private-ensuite-5.jpg&ehk=7pMTRpAo1r5%2fd14B4UlhFj908jHnUajMq8pKWVT6LQM%3d&risl=&pid=ImgRaw&r=0");
    background-size: cover;
   margin-left: 5vh;
   
}
table{
    border-color: rgb(251, 255, 7);
    border-width: 2px;
    width: 100vh;
    margin-top: 5vh;
    color: azure;
}
table th{
    color: rgb(255, 0, 157);
    background-color: rgb(0, 3, 6);
}
h1{
    color: aliceblue;
}
#edit a{
    color: rgb(9, 236, 9);
}
#delete a{
    color: red;
}
center h1{
    font-weight: bolder;
}
p{
    color: azure;
    font-weight: bolder;
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


    <center><h1 allign=center>Room Details</h1></center>
    <center><p>Personal  Info</p></center>
    <center><form action=""method='post'>
        <center><table >
            <tr>
                <td>First Name</td>
                <td >  <label name="fname" value=""><?php echo $row["fname"];?></label></td>
            </tr>
            <tr>
                <td>Last name</td>
                <td >  <input type="text" name="fname" value="<?php echo $row["lname"];?>"></td>
            </tr>
              
            <tr>
                <td>DOB</td>
                <td>  <input type="email" name="email" value="<?php echo $row["email"];?>"></td>
                
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
            
           
            

        </table></center>
    </form></center><br>
    <center><p>Room related  Info</p></center>
    <center><form action="" method='POST'>
        <table allign=center>
            <tr>
                <td>Room No</td>
                <td >  <select type="number" name="room" >
                    <option value="">Select</option>
                    <option value="101">101</option>
                    <option value="102">102</option>
                    <option value="103">103</option>
                    <option value="104">104</option>
                    <option value="201">201</option>
                    <option value="202">202</option>
                    <option value="203">203</option>
                    <option value="204">204</option>
                    <option value="301">301</option>
                    <option value="302">302</option>
                    <option value="303">303</option>
                    <option value="304">304</option>
                    <option value="401">401</option>
                    <option value="402">402</option>
                    <option value="403">403</option>
                    <option value="404">404</option>
                </select></td>
            </tr>
            <tr>
                <td>Hostel fee</td>
                <td >  <select type="number" name="h_fee" value="Ruppies" required>
                        <option value="1000">1000</option>
                        <option value="1500">1500</option>
                        <option value="2000">2000</option>
                        <option value="2500">2500</option>
                        <option value="3000">3000</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>duration</td>
                <td >  <input type="text" name="duration" ></td>
            </tr>
              
            <tr required>
                <td>With food  <input type="radio" name="yes" id="yes"></td>
                <td>Without food
                 <input type="radio" name="yes"  id="no"></td>
                
            </tr>
            
            <tr>
                <td>Food fee</td>
                <td ><select type="number"name="f_fee" value="Ruppies">
                    <option value="0">select</option>
                    <option value="2500">2500</option>
                    <option value="3500">3500</option>
                    <option value="4000">4000</option>
                    <option value="5000">5000</option>
                </select></td>
            </tr>

          
        
            <tr>
                
                <td><button type="submit" value ="submit" name="ok">submit</button></td>
            </tr>
            

        </table>
    </form></center>
</body>
<?Php
if(isset($_POST["ok"])){
    $room=$_POST["room"];
    $h_fee=$_POST["h_fee"];
    $duration=$_POST["duration"];
    $f_fee=$_POST["f_fee"];
    $t_fee=$h_fee+$f_fee;
    $sql2="UPDATE students SET room_no='$room',h_fee='$h_fee',duration='$duration',f_fee='$f_fee',t_fee='$t_fee' WHERE email='$email'";
    $result=mysqli_query($connection,$sql2);
    if($result){
        echo"inserted";
    }else{
        echo"dkjasdsd";
    }

}
?>