<?php
/**
 * Created by PhpStorm.
 * User: Georgian Alin
 * Date: 20.05.2017
 * Time: 11:31
 */

$loggedIn = false;
$arr = [1, 2, 3, 4, 5];

//if ($loggedIn) {
//    echo 'you are logged in';
//} else {
//    echo 'you are NOT logged in';
//}

//echo ($loggedIn) ? 'you are logged in' : 'you are NOT logged in';

//$isRegistred = ($loggedIn == true) ? true : false;
//echo $isRegistred;
//
//$age = 7;
//$score = 12;

//echo 'Your score is: ' . ($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional') : ($age > 10 ? 'Horrible' : 'Average'));
?>

<div>
    <?php if ($loggedIn) { ?>
        <h1>Welcome User</h1>
    <?php } else { ?>
        <h1>Welcome Guest</h1>
    <?php } ?>
</div>

<div>
    <?php if ($loggedIn) : ?>
        <h1>Welcome user</h1>
    <?php else: ?>
        <h1>Welcome Guest</h1>
    <?php endif; ?>
</div>

<div>
    <?php foreach ($arr as $val): ?>
        <?php echo $val; ?>
    <?php endforeach; ?>
</div>
