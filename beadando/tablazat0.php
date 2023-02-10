
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beadando";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$conn->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

$sql = "SELECT email, subject, message, date, user FROM uzenet ORDER BY date desc";
$result = $conn->query($sql);

$rows=$result->num_rows;

if ($rows > 0) {
  echo "<table class=\"t_uzenet\"><tr style=\"background-color:#8cc63f\"><th>ID</th><th>Felhasználó</th><th>Email</th><th>Tárgy</th><th>Üzenet</th><th>Dátum</th></tr>";
  // output data of each row

  for ($i=0; $i<$rows; $i++) {
    $row = $result->fetch_assoc();
    if ($i%2==0) {
        echo "<tr class=\"paros\"><td>".($i+1)."</td><td>".$row["user"]."</td><td>".$row["email"]."</td><td>".$row["subject"]."</td><td>".$row["message"]."</td><td>".$row["date"]."</td></tr>";
    } else {
        echo "<tr class=\"paratlan\"><td>".($i+1)."</td><td>".$row["user"]."</td><td>".$row["email"]."</td><td>".$row["subject"]."</td><td>".$row["message"]."</td><td>".$row["date"]."</td></tr>";
    }
  }
  
  echo "</table>";
} 
else {
  echo "<h1>Nincsenek üzenetek.</h1>";
}

$conn->close();
?>