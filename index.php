<?php


$conn = new mysqli("172.18.0.2","root","123","Trucorp");
//if (!$conn->connect_error){
//    die("Connection failed: " . $conn->connect_error);
//}else {
//    echo "Sukses: Koneksi telah terbuat!";
//}


$sql = "SELECT ID, Nama, Kantor FROM Users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. ",Name: " . $row["Nama"]. ",Kantor: " . $row["Kantor"]. "<br>";
    }
} else {
    echo "0 result";
}

$conn->close();


?>
