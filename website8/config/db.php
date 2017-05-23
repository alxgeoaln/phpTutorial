<?php
#create connection
$conn = mysqli_connect('localhost', 'root', 'Mcwtuyokzmn1', 'phpblog');

if(mysqli_connect_errno()){
    echo 'Failed to connect to MySQL '. mysqli_connect_errno();
}