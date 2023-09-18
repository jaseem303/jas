<html>
<head>
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
    background-image: url("https://surf.holiday/media/portal/product/5/5c521ed674a6e.JPG");
    background-size: cover;
   margin-left: 5vh;
   
}
table{
    border-color: rgb(251, 255, 7);
    border-width: 2px;
    width: 200vh;
    margin-top: 5vh;
    color: azure;
}
table th{
    color: rgb(255, 0, 157);
    background-color: rgb(0, 3, 6);
}
center h1{
    color: aliceblue;
    font-weight: bolder;
}
#edit a{
    color: rgb(9, 236, 9);
}
#delete a{
    color: red;
}
    </style>
</head>
    <body>
        
        <?php
        include_once("conn.php");
        include("headeradmin.php");
        $sql="SELECT * FROM students";
        $data=mysqli_query($connection,$sql);
        $total=mysqli_num_rows($data);
        
     
        if($total){
        ?>
        <center><table border="2"><center><h1>STUDENTS DETAILS</h1></center>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>E-Mail</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Room No</th>
            <th>Duration</th>
            <th>Hostel Fee</th>
            <th>Food Fee</th>
            <th colspan="2">Actions</th>
        </tr>


        <?php
            while($result=mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo$result['id'];?></td>
                    <td><?php echo$result['fname'];?></td>
                    <td><?php echo$result['lname'];?></td>
                    <td><?php echo$result['email'];?></td>
                    <td><?php echo$result['ph_no'];?></td>
                    <td><?php echo$result['address'];?></td>
                    <td><?php echo$result['room_no'];?></td>
                    <td><?php echo$result['duration'];?></td>
                    <td><?php echo$result['h_fee'];?></td>
                    <td><?php echo$result['f_fee'];?></td>
                    
                    <td id="edit"><a href="adminupdate.php?email=<?php echo$result['email'];?>">Edit</a></td>
                    <td id="delete"><a onclick="return confirm('Are You Sure,Want to Delete?')" href="admindelete.php?id=<?php echo$result["id"];?>">Delete</a></td>
                </tr>

                <?php
            }
        }
        else{
            echo"<br><br>No records found!!";
        }

        ?>
        </table></center><br>
        <center><a href="studentregadmin.php?email=<?php echo$email;?>"><input type="button" value="Add New" style="background-color:red;color:white;font-weight:bold;" ></a></center>
    </body>
</html>