<?php
$conn=new mysqli('localhost','root','','memorial');
if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
}
//$sql = "SELECT * FROM Etudiant";
//$result = $conn->query($sql);
//if ($result->num_rows > 0) {
    // Output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo "Name: " . $row["nom"] . " - Email: " . $row["email"] . "<br>";
//    }
//} else {
//    echo "0 results";
//}