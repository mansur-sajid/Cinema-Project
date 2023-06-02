<?PHP
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername,$username,$password,"cinema");
$name = $_POST['a_name'];
$password = $_POST['a_pass'];
$sql = "SELECT * from admin;";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if($name == $row["a_name"] && $password == $row['a_pass']){
    echo '<script type="text/javascript">
    window.location = "adminmain.php";
    alert("Hi Admin!!!");
    </script>';
}
else{
    echo '<script type="text/javascript">
    window.location = "adminlogin.php";
    alert("Wrong Password");
    </script>';
    
}
?>