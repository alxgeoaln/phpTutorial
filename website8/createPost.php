<?php

require('config/config.php');
require('config/db.php');


if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $author = 'Georgian Alin Alexandru';

    $query = "INSERT INTO posts (title, body, author) VALUES ('$title', '$body', '$author')";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    var_dump($result);
//    $post = mysqli_fetch_assoc($result);
//
//mysqli_free_result($result);

    mysqli_close($conn);

}


?>

<?php include('inc/header.php'); ?>
<div class="container">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea type="text" name="body" class="form-control"></textarea>
        </div>

        <input type="submit" value="Submit" name="submit" class="btn btn-primary">
    </form>
</div>
<?php include('inc/footer.php'); ?>
