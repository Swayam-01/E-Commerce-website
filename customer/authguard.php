<?php

session_start();

//print_r($_SESSION);

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

echo "<div class = 'd-flex justify-content-evenly bg-secondary text-white p-1'>
    <div>$_SESSION[username]</div>
    <div>$_SESSION[usertype]</div>
    <div>
        <a href = '../shared/logout.php'>
            <button class = 'btn btn-primary'>Logout</button>
        </a>
    </div>
</div>";
?>