<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<br>
<form action="">
	<div class="container">
     <div class="col-xs-8">
     	<input type="text" class="form-control " id="usr">
     </div>
     <div class="col-xs-2">
     	<input type="submit" class="btn btn-info btn-sm" value="ค้นหา">
     </div>
      </div>

</form>
      <div class ="scroll">
  <div class="container">
  <table class="table table-hover">

    <tbody>

   <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
      <tr>
      <td > id: <?php . $row["bookID"]. ?> </div>
            Name: <?php . $row["bookName"]. ?></div>
              <div class="">"Authur: " . $row["bookAuthur"].</div>
              <div class="">"Publisher: " . $row["bookPublisher"].</div>
        </td>
      </tr>

} else {
    echo "0 results";
}
$conn->close();
?>



    </tbody>
  </table>

</div>
	
</div>
<form action="">
<center> <input type="submit" class="btn btn-info" value="เพิ่มข้อมูล"></center>
<form>


</body>
</html>