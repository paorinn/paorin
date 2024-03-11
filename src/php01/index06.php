<?php
function getS($base, $hight)
{
    return $base * $hight;
}
function getT($base, $hight)
{
    return $base * $hight / 2;
}
function getD($superBase, $lowerBase, $hight)
{
    return ($superBase + $lowerBase) * $hight / 2;
}

echo getS(5, 5) . "\n";
echo getT(7, 8) . "\n";
echo getD(4, 5, 4);