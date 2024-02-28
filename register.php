<?php
if(isset($_POST['reg']))
{
    $name=$_POST['a'];
    $email=$_POST['b'];
    $contact=$_POST['c'];
    $password=$_POST['d'];
    
    $conn=mysqli_connect("localhost","root","","Amphy");
    $q2="insert into register values('$name','$email','$contact', '$password')";
    mysqli_query($conn,$q2);
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

                <div class="col-md-4" style="border-radius:20px; background-image: linear-gradient(black,purple); box-shadow: inset ;
  box-shadow: 5px 5px 5px black; border-style:solid;">
                    <br>
                    <center><h1 style="color:white;">REGISTER</h1></center>
			<hr>
		    <input type="text" placeholder="Enter Username" name="a" class="form-control"><br><br>
                    <input type="email" placeholder="Enter email" name="b" class="form-control"><br><br>
	            <input type="number" placeholder="Enter contact number" name="c" class="form-control"><br><br>
                    
			<center>
                    <a href="book.php" style="color: aliceblue;border: solid;width: 20px;height: auto;">submit</a><br>
			<h6 style="color:white;">Already have an account?<a href="Amphylogin.php" style="color:white;">Login</a></h6>
			</center>
                    <br>
                </div>

                <div class="col-md-4">

                </div>
            </div>
            
        </form>
    </body>
</html>
<script>
    alert("Registered succesfully")
</script>