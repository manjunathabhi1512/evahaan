

<?php
include "db_con.php";
IF(ISSET($_POST['signup'])){

	if (isset($_POST['name'])) {
    $name = $_POST['name'];
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}

if (isset($_POST['password'])) {
                $password = $_POST['password'];
}
}
   /* $name=$_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];*/

$sql = "INSERT INTO user_login (name, email, password)
VALUES ('$name', '$email', '$password')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>