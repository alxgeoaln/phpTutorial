<?php
//    setcookie('username', 'Frank', time() - 3600);
    setcookie('username', 'Frank', time() + 3600);

    if(count($_COOKIE) > 0) {
        echo 'There are '. count($_COOKIE). ' cookiess saved';
    } else {
        echo 'no cookies for you';
    };
    if(isset($_COOKIE['username'])){
        echo 'User '. $_COOKIE['username'] . ' is set <br> ';
    } else {
        echo'User is not set <br> ';
    }
?>