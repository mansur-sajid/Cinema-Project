<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
  <style>
  td,th{
    border: 1px solid black;
    padding:10px 30px 10px 30px;
  }
  th{
    background-color:grey;
    color:white;
  }
  table{
    border-collapse : collapse;
    margin-top:50px;
  }
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername,$username,$password,"cinema");

$sql = "SELECT *
        from movie ;";
$conn->query($sql);
$result = $conn->query($sql);
echo "<center><table>";
echo "<tr><th>Movie</th></tr>";
while($row = $result->fetch_assoc()) {
  echo "<tr>";
  echo "<td>" . $row["m_name"]. "</td>";
  echo "</tr>";
  }
  echo "</table></center>";
  echo '<form method="post" action="dmovie.php"><label>Movie Name:</label><input type="text" name="movie" id=""><br><input type="submit" value="submit" class="btn btn-outline-primary"></form>'
?>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>