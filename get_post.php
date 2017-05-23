<?php
if (isset($_GET['name'])) {
   $name = htmlentities($_GET['name']);
    echo $name;
//    print_r($_GET);

}
if (isset($_POST['name'])) {
   $name = htmlentities($_POST['name']);
    echo $name;
//    print_r($_GET);

}
if (isset($_REQUEST['name'])) {
   $name = htmlentities($_REQUEST['name']);
    echo $name;
//    print_r($_GET);

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Get_post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <form method="POST" action="get_post.php">
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label><br>
            <input type="email" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>

</div>
</body>
</html>