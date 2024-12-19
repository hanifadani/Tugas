<?php

$var1 = "Hello";
$var2 = "";
$var3 = 0;
$var4 = null;

echo "isset() examples:<br>";
echo isset($var1) ? 'var1 is set<br>' : 'var1 is not set<br>';
echo isset($var2) ? 'var2 is set<br>' : 'var2 is not set<br>';
echo isset($var3) ? 'var3 is set<br>' : 'var3 is not set<br>';
echo isset($var4) ? 'var4 is set<br>' : 'var4 is not set<br>';

echo "<br>empty() examples:<br>";
echo empty($var1) ? 'var1 is empty<br>' : 'var1 is not empty<br>';
echo empty($var2) ? 'var2 is empty<br>' : 'var2 is not empty<br>';
echo empty($var3) ? 'var3 is empty<br>' : 'var3 is not empty<br>';
echo empty($var4) ? 'var4 is empty<br>' : 'var4 is not empty<br>';

?>