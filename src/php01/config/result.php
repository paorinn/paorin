<?php
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
$want = htmlspecialchars($_POST["want"], ENT_QUOTES);
$number = htmlspecialchars($_POST["number"], ENT_QUOTES);

print "私の名前は、" . $name . "<br>";
print "ご希望の商品は、" .$want . "<br>";
print "注文数" . $number;


