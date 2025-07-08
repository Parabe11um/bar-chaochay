<?php
echo 'open_basedir: ' . ini_get('open_basedir') . "<br>";
echo 'temp dir: ' . sys_get_temp_dir() . "<br>";
$tmp = tempnam(sys_get_temp_dir(), 'test');
echo 'tempnam file: ' . $tmp . "<br>";
echo 'is_file(' . $tmp . '): ' . (is_file($tmp) ? 'yes' : 'no') . "<br>";
echo ini_get('open_basedir');
