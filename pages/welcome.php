
<?php include('header.php');  ?> 


<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$message = $_POST['message'];




$conn = mysqli_connect("localhost" ,"root", "","furniture");

if(!$conn){
    echo "error" .mysqli_connect_error();
}



$sql = "INSERT INTO website(name,surname, email , message) VALUES ('$name','$surname', '$email', '$message')";
if(mysqli_query($conn, $sql))
{
    echo "<h3>Your data is succesfully submitted.</h3>";
}
else {
    echo "error" . mysqli_error($conn);
}








?>



<?php include('footer.php');  ?> 















