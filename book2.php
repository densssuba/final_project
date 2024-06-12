<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
 body{
 background-image: url("https://dynamic-media-cdn.tripadvisor.com/media/photo-o/23/21/8b/77/caption.jpg?w=1200&h=-1&s=1");
 background-repeat: no-repeat;
 background-size: cover;
 

 p{
    display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            color:white;
            font-size: x-large;
 
  
 }
 }
    </style>
</head>
<body>
    <p>sucess</p> 
    
    
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $check_in = $_POST['check-in'];
  $check_out = $_POST['check-out']; 
  $room_no = $_POST['room-no'];
  $guest = $_POST['guest'];

  $sql = "INSERT INTO hotel (name, check_in, check_out, room_no, guest)
          VALUES ('$name', '$check_in', '$check_out', $room_no, $guest)";

  if ($conn->query($sql) === TRUE) {
    
   echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>
