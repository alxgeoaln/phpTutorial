<?php
    // Check for posted data
    if(filter_has_var(INPUT_POST, 'data')){
        echo 'Data Found';
    } else {
        echo 'No Data';
    }
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <button type="submit">Submit</button>
</form>
