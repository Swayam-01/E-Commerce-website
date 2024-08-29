<?php

session_start();

print_r($_SESSION);

if(!isset($_SESSION['login_status'])){
    echo "Logiin Attempt Skipped";
    die;
}


if($_SESSION['login_status'] == false){
    echo "Unauthorised Attempt 403";
    die;
}

if($_SESSION['usertype'] != 'Customer'){
    echo "Forbidden Access! 403";
    die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Customer page Working</h1>
</body>
</html> 