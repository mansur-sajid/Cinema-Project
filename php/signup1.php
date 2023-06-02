<?php
testName($_POST['fname'],$_POST['Lname']);
$name = trim(($_POST['fname'] ." ". $_POST['Lname']));
$confirmpassword =$_POST['confirmpassword'];
testPassword($_POST['password']);
$password = $_POST['password'];
$phone = testPhone($_POST['phone']);
$email = $_POST['Email'];
$gender = $_POST['Gender']; 

function testName($name1,$name2){   
    if (!preg_match ("/^[a-zA-z]*$/", $name1) or !preg_match ("/^[a-zA-z]*$/", $name2)  ) {   
        echo "<script>alert('Only alphabets and whitespace are allowed in name')
        window.location = 'sign_up.php'
        </script>" ; 
    }
    else{
        $fullname = $name1.$name2;
        $length = strlen($fullname);
        if($length<6){
            echo "<script>alert('Name should have 6 characters atleast')
                  window.location = 'sign_up.php'
                  </script>" ; 
        }
    }
}

function testPassword($p){
    if(!($_POST["password"] === $_POST["confirmpassword"])){
        echo "<script>alert('Passwords dont match')
        window.location = 'sign_up.php'
        </script>" ; 
    }
    else{
        $length = strlen($_POST["password"].$_POST["confirmpassword"]);
        if($length<6){
            echo "<script>alert('Password should be 6 characters atleast')
                  window.location = 'sign_up.php'
                  </script>" ; 
        }
    }
}
function testPhone($phone){
    if (!preg_match ("/^[0-9]*$/", $phone) ){  
        $ErrMsg = "Only numeric value is allowed.";  
        echo "<script>alert('Phone number should only have digits')
                  window.location = 'sign_up.php'
                  </script>" ;   
    }
    else{
        $length = strlen($phone);
        if($length<9){
            echo "<script>alert('Phone number should be atleast 11 characters long')
            window.location = 'sign_up.php'
            </script>" ;
        }
        else{
            return $phone;
        }
    }
}
$conn = new mysqli("localhost","root","","cinema");
$sql = "Insert into customer(cust_name, cust_pass,cust_phone,email)
values ('$name','$password','$phone','$email');";
$conn->query($sql);


echo "<script>
window.location = 'login.php'
</script>" ;
?>