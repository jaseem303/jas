
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yt login page</title>
    <style>
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
    background-color: black;
    /* background: url("https://static.vecteezy.com/system/resources/previews/007/164/537/original/fingerprint-identity-sensor-data-protection-system-podium-hologram-blue-light-and-concept-free-vector.jpg") no-repeat;
    background-position: center;
    background-size: cover; */
     
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
}
h2{
   font-size: 2em;
   color: #fff;
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
.btn{
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
    text-decoration: underline;
}
    </style>
</head>
<body>
    <section>
    <div class="form-box">
        <div class="form-value">
            <form action="">

                <h2>login</h2>

                <div class="inputbox">
                    <ion-icon name="mail"></ion-icon>
                    <input type="email" required>
                    <label for="">Email</label>
                </div>

                <div class="inputbox">
                    <ion-icon name="lock-closed"></ion-icon>
                    <input type="password" required>
                    <label for="">Password</label>
                </div>

                <div class="forget">
                <label for=""><input type="checkbox">remember me , <a href="#"> forget password </a></label>
                </div>

                <button>login</button>
                <div class="register">
                    <p>dont have an account <a href="">register</a></p>
                </div>

            </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </section>
</body>
</html>