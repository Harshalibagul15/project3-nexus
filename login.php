<?php
if(isset($_POST['sub']))
{
    $email=$_POST['a'];
    $password=$_POST['b'];
    $conn=mysqli_connect("localhost","root","","Amphy");
    $q1="insert into hotel values('$email', '$password')";
    mysqli_query($conn,$q1);
}
?>


<html>
    <head>
        <title>LOGIN</title>
        <style>
            body{
                background-image: url(h1.jpg);
            }
        </style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    </head>
    <body>
<br><br><br><br>
        <form action="" method=POST>
            <div class="container">
                <div class="col-md-4">

                </div>

                <div class="col-md-4" style="border-radius:20px;border-style: solid;  background-image: linear-gradient(black,purple); box-shadow: inset ;
  box-shadow: 5px 5px 5px black;" >
                    <br><br>
                    <center><h1 style="color:white;">Login to book</h1></center>
			<hr><br>
                    <input type="email" placeholder="Enter email" name="a" class="form-control"><br><br>
                    <input type="password" placeholder="Enter password" name="b" class="form-control"><br><br>
			<center>
                    <input type="submit" name="sub" style="background-color:black; color:white;"><br><br>
			<h6 style="color:white;">Don't have an account?<a href="register.php" style="color:white">Register</a></h6>
			</center>
                    <br><br>
                </div>

                <div class="col-md-4">

                </div>
            </div>
            
        </form>
    </body>
</html>
<script>
    alert("Login succesfully")
</script>