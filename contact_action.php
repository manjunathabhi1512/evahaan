

<?php
include "db_con.php";
IF(ISSET($_POST['signup'])){

	if (isset($_POST['name'])) {
    $name = $_POST['name'];
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}

if (isset($_POST['address'])) {
                $address = $_POST['address'];
}
if (isset($_POST['comment'])) {
                $comment= $_POST['comment'];
}

}
   /* $name=$_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];*/

$sql = "INSERT INTO feedback (name, email, address, comment)
VALUES ('$name', '$email', '$address','$comment')";

if ($con->query($sql) === TRUE) {
    echo "Thank you for your feedback";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>