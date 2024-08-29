<html>
    <head>
        <style>
            .container{
                display : flex;
                gap : 20px;
            }
            .pdt-card{
                padding : 10px;
                background-color : lightgrey;
                border : 2px solid grey;
            }
            .name{
                font-size : 28px;
                color : maroon;
                font-weight : bold;
            }
            .price{
                font-size : 24px;
                font-family : cursive;
                color : blue;
            }
            .price::after{
                content : "Rs";
                font-size : 16px;
            }
            .detail{
                padding: 2px;
            }
            .action{
                display : flex;
                margin-top : 2px;
                text-align : center;
                justify-content : space-between;
            }
            .img-container{
                width : 100px;
                height : 100px;
            }
            img{
                width : 100%;
                height : 100%;
                border-radius : 2rem;
            }
        </style>
    </head>
</html>


<?php

include "authguard.php";
include "../shared/connection.php";
include "menu.html";

$sql_result = mysqli_query($conn, "select * from cart join product on cart.pid = product.pid where userid = $_SESSION[userid]");

// while($dbrow = mysqli_fetch_assoc($sql_result))
// {
//     print_r($dbrow);
//     echo "<hr>";
// }

echo "<div class = 'container'>";
while($dbrow = mysqli_fetch_assoc($sql_result)){
    
    echo "<div class = 'pdt-card'>
        
        <div class = 'name'>$dbrow[pid]$dbrow[name]</div>
        <div class = 'price'>$dbrow[price]</div>
        <div class = 'img-container'>
            <img src = '$dbrow[impath]'>
        </div>
        <div class = 'detail'>$dbrow[detail]</div>
        <div class = 'action'>
            <a href = 'deletecart.php?cartid=$dbrow[cartid]'>
                <button class = 'btn btn-danger'>Remove from Cart</button>
            </a>
        </div>
    </div>";
     
}
echo "</div>";

?>