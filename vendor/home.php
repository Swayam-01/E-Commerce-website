<?php

include "authguard.php";
include "menu.html";
// session_start();

// print_r($_SESSION);

// if(!isset($_SESSION['login_status'])){
//     echo "Logiin Attempt Skipped";
// }


// if($_SESSION['login_status'] == false){
//     echo "Unauthorised Attempt 403";
//     die;
// }

// if($_SESSION['usertype'] != 'Vendor'){
//     echo "Forbidden Access! 403";
//     die;
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Vendor Home Works</h1>
    <br>
    <div class = "d-flex justify-content-center align-items-center vh-100">

        <form action = "upload_product.php" method = "post" enctype = "multipart/form-data" class = "w-50 bg-secondary p-4">
            <h3 class = "text-center text-white"> Upload Here </h3>
            <input class = "form-control mt-3" type = "text" name = "name" placeholder = "Product Name">
            <input class = "form-control mt-2"type = "number" name = "price" min ="0" placeholder = "Product Price">
            <textarea class = "form-control mt-2"name = "detail" cols = "30" rows = "5" placeholder = "Product Description"></textarea>
            <input class = "form-control mt-2"type = "file" name = "pdtimg" accept = ".jpg, .png, .jpeg">
            <div class = "text-center mt-3">
                <button class = "btn btn-primary"> Add Product </button>
            </div>
        </form>

    </div>
</body>
</html>