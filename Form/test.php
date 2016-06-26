<?php
$tranKey = '';
$seed = '';

$hashString = sha1($seed . $tranKey, false);


print_r($hashString);
