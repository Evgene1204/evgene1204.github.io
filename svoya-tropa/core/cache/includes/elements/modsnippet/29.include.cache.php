<?php
$arr = array();
$arr = explode(", ", $info);
$infostr = "";
foreach( $arr as $value ) {
    $infostr .= "<p class='upper card-desc'>- ".$value." -</p>";
}
return $infostr;
return;
