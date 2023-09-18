<?php

include_once('conn.php');
if (isset($_POST["ok"])) {

    $email = $_POST['email'];
    $passw = $_POST['pass'];
    $sql = "SELECT email,pass FROM students WHERE email='$email'";
    $result = mysqli_query($connection, $sql);


    if (mysqli_num_rows($result) > 0) {

        $row=mysqli_fetch_assoc($result);
            if (password_verify($passw,$row['pass'])){
                echo"Success";
                header("location:dashboard.php?email=".$email);
            } else {
                ?>
                <script type="text/javascript">
                    alert("Incorrect password!");
                </script>
                <?php
            }


        }
    } else {
        ?>
        <script type="text/javascript">
            //alert("User not found!");
        </script>
<?php
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <STyle>
    *{
    padding: 0px;
    margin: 0px;
    font-family: 'poppins',sans-serif;
}
section{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    min-height: 100vh;
    /* background-color:BLACK; */
    background: url("https://www.skooltree.com/wp-content/uploads/2020/01/hostel-management-system-1.png") no-repeat;
    background-position: center;
    background-size: cover;
     
}
.form-box{
    position: relative;
    height: 450px;
    width: 400px;
    border-radius: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
     background: transparent;
    border: 2px solid rgba (255,255,255.0.5);
    backdrop-filter: blur(7px);
    margin-left: 65vh;
}
form h2{
   font-size: 2em;
   color: #ffffff;
   text-align: center; 
}
.inputbox{
    position: relative ;
    margin: 30px 0 ;
    width: 310px;
    border-bottom: 2px solid #fff;
}
.inputbox label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-8px);
    color: #fff;
    font-size: 1em;
    pointer-events: none;
    transition: .4s;
}

input:focus ~ label,
input :valid ~ label{
    top: -5px;
}
.inputbox input{
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    padding: 0 35px 0 5px;
    color: #fff;
}
.inputbox ion-icon{
     position: absolute;
     right: 8px;
     font-size: 1.2em;
     top: 20px;
}
.forget{
    margin: -15px 0 15px;
    font-size: .9em;
    color: #fff;
    display: flex;
    justify-content: center;
}
.forget label input{
    margin-right: 3px;
}
.forget label a{
    color: #fff;
    text-decoration: none;
    font-weight: 600;
    
}
.forget label a:hover{
    text-decoration: underline;
}
form .btn{
    width: 100%;
    height: 40px;
    border-radius: 40px;
    background: #fff;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1em;
    font-weight: 600;
}
.register{
    font-size: .9em;
    color: #fff;
     margin: 25px 0 10px;
     text-align: center;
}
.register p a{
    text-decoration: none;
    color: #fff;
    font-weight: 600;
}
.register p a:hover{
    text-decoration: underline;
}
   </STyle>


</head>
<body>
<section>

    <div>
        <?php 
        include("header.php");
        
        ?>
    <div class="form-box">
        <div class="form-value">
            <form action="" method="POST">

                <h2>login</h2>

                <div class="inputbox">
                    <ion-icon name="mail"></ion-icon>
                    <input type="email" name="email" required>
                    <label for="">Email</label>
                </div>

                <div class="inputbox">
                    <ion-icon name="lock-closed"></ion-icon>
                    <input type="password" name="pass" required>
                    <label for="">Password</label>
                </div>

                

                <input type="submit" name="ok" value="Login" class="btn">
             

            </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </section>
    </div>
</body>
</html>

