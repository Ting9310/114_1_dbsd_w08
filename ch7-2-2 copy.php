<?php 
$arr["color"] = "紅色";  // 更改陣列元素值
$arr["name"] = "黃薏庭";
$arr["shape"] = "圓形";

foreach ($arr as $k => $v)
{
   echo "$k~ $v~ <HR>";
}
echo "<BR>";
print_r($arr);