<?php
    $user = ['name' => 'Brad', 'email' => 'text@x.ro', 'age' => 35];

    $user = serialize($user);

    setcookie('user', $user, time() + (86400 * 30));

    $user = unserialize($_COOKIE['user']);
    echo $user['name']
    ?>