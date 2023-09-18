<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
    <style>
                @import url('https://fonts.googleapis.com/css2?family=Niconne&display=swap');

        section{
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f0f0;
            
        }

        .box {
            height: 180px;
            width: 240px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 8px;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 20px;
            display: inline-block;
            vertical-align: middle;
            margin: 30px;
            box-shadow: 0 8px 16px -8px rgba(0,0,0,0.4);
            border-radius: 6px;
            transition: transform .2s;
        }

        .box:hover {
         -ms-transform: scale(1.2);
         -webkit-transform: scale(1.2); 
         transform: scale(1.2); 
        }

        .contaier{

            margin: auto;
            width: 50%;
            text-align: center;
            display: flex;

        }

        #profile {
            background: linear-gradient(#dE685E, #EE786E);
        }

        #room {
            background: linear-gradient(#92bCa6, #A2CCB6);
        }

        h1{
            padding-top: 40px;
            color:#fff;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

        }
        
        #one{
            text-decoration: none;
            color: #fff;
    
        }
        #two{
            text-decoration: none;
            color: #fff;
    
        }

    

    </style>
</head>
<body>
<section>
<?php
include("conn.php");
include("headeruser.php");
$email=$_GET['email'];
// echo$email;

?>
    <div class="contaier">
        <div  id="profile" class="box">
            <h1><a href="myprofile.php?email=<?php echo$email?>" id="one">My <br> Profile</a></h1>
        </div>

        <div  id="room" class="box">
           <a href="roomdetails.php?email=<?php echo$email?>" id="two"> <h1>My <br> room</h1></a>
        </div>
    </div>
    </section>
</body>
</html>