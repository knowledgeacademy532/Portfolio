<?php
$con=mysqli_connect('localhost','root');
if($con)
{
    echo "Connection successfull";

}
else{
    echo "Connection failed";
}
mysqli_select_db($con,'portfolio_db');
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$des=$_POST['description'];
$query="insert into users(name,email,number,description)values('$name','$email','$number','$des')";
mysqli_query($con,$query);
header('location:index.php')


?>