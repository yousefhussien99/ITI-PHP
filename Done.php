<?php
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$address = $_POST['address'];
$country = $_POST['country'];
$Department = $_POST['Department'];
$gender = $_POST ['Gender'];
$skills = $_POST['skills'];
echo "<div >";
if ( $gender == "Male"){
    echo "Thanks Mr $Fname $Lname for your registration";
}
else {
    echo "Thanks Mrs $Fname $Lname for your registration";
}
echo "<br>";
echo "please check your information";
echo "<br>";
echo "Name: $Fname $Lname";
echo "<br>";
echo "Address: $address";
echo "<br>";
echo "your skills: $skills";
echo "<br>";
echo "your department: $Department";
echo "<br>";
echo "</div>";
?>
<style>
    *{
        margin: 0;
        padding: 0;
        background-image : linear-gradient(to right, #ff9966, #ff5e62);
        }
        div {
            border : 2px solid #ccc;
            width: 500px;
            margin: 10px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px #000;
            top : 50%;
            position: absolute;
            left: 50%;
            transform: translate(-50%,-50%);
            font:normal normal 20px/1.5 sans-serif, Arial;
        }
</style>