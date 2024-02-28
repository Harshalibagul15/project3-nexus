<?php
if(isset($_POST['reg']))
{
    $name=$_POST['a'];
    $contact=$_POST['b'];
    $in=$_POST['c'];
    $out=$_POST['d'];
    $roomtype=$_POST['e'];
    $guests=$_POST['f'];
    
    $conn=mysqli_connect("localhost","root","","Amphy");
    $q3="insert into booking values('$name','$contact','$in', '$out','$roomtype','$ac', '$guests')";
    mysqli_query($conn,$q3);
}
?>


<html>
    <head>
        <title>LOGIN</title>
        <style>
            body{
                background-image: linear-gradient(black,purple)
            }
        </style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    </head>
    <body>
<br><br><br><br>
        <form action="" method=POST>
            <div class="container">
                <div class="col-md-3">

                </div>

                <div class="col-md-6" style="border-radius:20px; background-image: linear-gradient(rgba(128, 0, 128, 0),rgba(216, 8, 216, 0)); box-shadow: inset ;
  box-shadow: 5px 5px 5px black; border-style:solid;">
                    <br>
                    <center><h1 style="color:white;">BOOK A ROOM</h1></center>
			<hr>
		    <input type="text" placeholder="Enter Full name" name="a" class="form-control"><br><br>
                    <input type="number" placeholder="Enter Contact no." name="b" class="form-control"><br><br>
		   <p style="color:#fefbd8">Chech-In&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Check-Out</p>
	           &nbsp;&nbsp;&nbsp;&nbsp; <input type="date"  name="c" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="date"  name="d" > <br><br>

<input type="text" placeholder="Enter Room type" name="e" class="form-control"><br><br>

<input type="number" placeholder="Enter No. of guests" name="f" class="form-control"><br><br>
                    
			<center>
                    <a href="rooms.html" style="color: aliceblue;border: solid;width: 25px;height:auto;">submit</a><br>
			<h6 style="color:white;">Already have an account?<a href="login.html" style="color:white;">Login</a></h6>
			</center>
                    <br>
                </div>

                <div class="col-md-3">

                </div>
            </div>
            
        </form>
    </body>
</html>
<script>
    alert("Registered succesfully")
</script>