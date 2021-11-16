<?php
$num = 0;
while ($num < 5) {
    require 'point_class.php';
    $num = $num + 1;
    echo "Вызов require $num раз"; ?><br>
    <?php
}
