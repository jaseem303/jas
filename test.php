<?php
include_once("conn.php");
if(isset($_POST['ok2'])){
    $em=$_POST['email'];
    $passw=$_POST['passw'];
    $sql="SELECT * FROM students WHERE email='$em' AND cpass='$passw'";
    $result=mysqli_query($connection,$sql);
    $num=mysqli_num_rows($result);
    if($num>0){
        header("location:dashboard.php");
    }else{
       
        echo"<script>alert('Invalid Username or Password🚫')</script>";
        
        
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body{
            background-image: url("https://img.freepik.com/free-photo/top-view-desk-yellow-with-notepad-glasses-keyboard-smartphone-coffee-mug-copy-space_37714-1056.jpg?size=626&ext=jpg");
            background-size: cover;
        }
        form{
            border: 4px solid grey;
            width: 70vh;
            height: 40vh;
            margin-top: 25vh;
            margin-left: 70vh;
            background-image: url("https://wallpapercave.com/wp/wp2940002.jpg");
            background-size: cover;
        }
        .main{
            margin-top: 5vh;
            margin-left: 10vh;
        }
        h1{
            margin-left: 25vh;
        }
        .btn{
            margin-top: 5vh;
            margin-left: 15vh;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <h1>LOGIN</h1>
         <div class="main">
            <div>
                <label for="">Enter E-Mail➡️</label>
                <input type="text" name="email">
            </div>
            <br><br>
            <div>
                <label for="">Enter Password➡️</label>
                <input type="password" name="passw">
            </div>
            <div>
                <input type="submit" name="ok2" class="btn">
            </div>

         </div>
    </form>
</body>

</html>
