<?php
session_start();

// print_r($_POST);
// echo "<br>";
// print_r($_FILES);
// echo "<br>";
// echo "Name of File:".$_FILES['pdtimg']['name'];
// echo "<br>";
// echo "Temp path of File:".$_FILES['pdtimg']['tmp_name'];
// echo "<br>";
// echo "Size of File:".$_FILES['pdtimg']['size'];

$source = $_FILES['pdtimg']['tmp_name'];
$target = "../shared/images/".$_FILES['pdtimg']['name'];

move_uploaded_file($source, $target);

$conn = new mysqli("localhost", "root", "", "project", 3306);
$sql_status = mysqli_query($conn, "insert into product (name, price, detail, impath, owner) values('$_POST[name]', '$_POST[price]', '$_POST[detail]', '$target', $_SESSION[userid])");


if($sql_status)
{
    echo "Product uploaded Successfully";
}
else{
    echo "ERROR".mysqli_error($conn);
}
?>