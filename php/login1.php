<?php
$password = trim($_POST['password']);
$phone = testPhone($_POST['phone']);
$email = $_POST['Email'];
$found = false;

function testPhone($phone){
    if (!preg_match ("/^[0-9]*$/", $phone) ){  
        $ErrMsg = "Only numeric value is allowed.";  
        echo "<script>alert('Phone number should only have digits')
                  window.location = 'login.php'
                  </script>" ;   
    }
    else{
        return $phone;
    }
}

$conn = new mysqli("localhost","root","","cinema");

$sql = "SELECT cust_name, cust_phone, email, cust_pass from customer;";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    if($phone == $row['cust_phone'] and $email == $row['email'] and $password == $row['cust_pass']){
        $found = true;
        echo "<script>
        window.location = 'main.php'
        </script>";
        break;
    }
}
if($found==false){
    echo "<script>
        alert('Invalid Credentials')
        window.location = 'login.php'
        </script>";
}
?>