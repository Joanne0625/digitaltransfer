<?php
$num = $_POST['decimal'];
$base = $_POST['toDigital'];

$digit_list = "0123456789ABCDEF";
$numlist = "";

while ($num >= $base) {
    $rnum = $num % $base;
    $num = (int) ($num / $base);
    $numlist = $digit_list[$rnum] . $numlist;
}

$numlist = $digit_list[$num] . $numlist;
$len = strlen($numlist);

for ($i = 0; $i < $len; $i++) {
    $digit = $numlist[$i];
    echo '<img src="imgs/' . $digit . '.png"' . $digit . '>';
}
?>