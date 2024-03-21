<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
*{
	margin: 0;
	padding: 0;
}
body{
	background: url("images/blog-1.jpeg");
    background-size: cover;
    background-position: center;
}
div.main{
	width: 400px;
	margin: 100px auto 0px auto;
}
h2{
	text-align: center;
	padding: 20px;
	font-family: sans-serif;
}
div.Order{
	background-color:rgba(0,0,0,0.5);
	width: 100%;
	font-size: 18px;
	border-radius: 10px;
	border:1px solid rgba(255,255,2550.3);
	box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	color:#fff;
}
form#Order{
	margin: 40px;
}
label{
	font-family: sans-serif;
	font-size: 18px;
	font-style: italic;
}
input#name{
	width: 300px;
	border:1px solid #ddd;
	border-radius: 3px;
	outline: 0px;
	padding: 7px;
	background-color: #fff;
	box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3);
}
input#number{
	width: 300px;
	border:1px solid #ddd;
	border-radius: 3px;
	outline: 0px;
	padding: 7px;
	background-color: #fff;
	box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3);
}
textarea#address{
	width: 300px;
	border:1px solid #ddd;
	border-radius: 3px;
	outline: 0px;
	padding: 7px;
	background-color: #fff;
	box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3);
}
input#submit{
	width: 200px;
	padding: 7px;
	font-size: 16px;
	font-family: sans-serif;
	font-weight: 600;
	border-radius: 3px;
	background-color: rgba(250,100,0,0.8);
	color: #fff;
	cursor: pointer;
	border: 1px solid rgba(255,255,0.3);
	box-shadow: 1px 1px 5px rgba(0,0,0,0.3);
	margin-bottom: 20px;
}
label,span,h2{
	text-shadow: 1px 1px 5px rgba(0,0,0,0.3);
}
</style>
</head>
<body>
    <div class="main">
        <div class="Order">
            <h2>ORDER NOW</h2>
            <form>
                <lable>Quantity</lable>
                <br>
                <input type="number" name="Quantity" 
                id="name" placeholder="how Many">
                <br><br>
				
				<label>Product name :</label>
                <br>
                <input type="text" name="pname"
				id="prname" placeholder="Enter product name">
				<br><br>
                <label>Full name :</label>
                <br>
                <input type="text" name="fname"
                id="name" placeholder="Enter your name">
                <br><br>
                <label>Email :</label>
                <br>
                <input type="email" name="email" 
                id="name" placeholder="Enter your valid email">
                <br><br>
                <label>Phone Number :</label>
                <br>
                <input type="number" name="number"
                id="number" placeholder="Enter your phone number">
                <br><br>
                <label>Address :</label>
                <br>
                    <textarea name="address" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>
                <br><br>
                <input type="submit" name="submit" value="Confirm Order" id="submit">
            
            </form>
        </div>
    </div>
    
</body>
</html>
<?php
$q=$_GET['Quantity'];
$p=$_GET['pname'];
$f=$_GET['fname'];
$e=$_GET['email'];
$n=$_GET['number'];
$s=$_GET['address'];

echo "$q";
echo "$n";
echo "$e";
echo "$n";
echo "$s";
$que="INSERT INTO COSTOMER VALUES('$q','$p','$f','$e','$n','$s')";
$data=mysqli_query($conn,$que);
?>