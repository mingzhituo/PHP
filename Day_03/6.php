<?php
//使用utf-8编码，不然可能会出现乱码
header("Content-Type:text/html;charset=utf-8");

$a=5;
echo '$a++的值为：'.$a++."<br/>";  //先输出5,$a在+1
# 因为上面的计算，$a=6,下面的计算$a值为6
echo '++$a的值为：'.++$a."<br/>";  //$a先+1，在输出7

$b=6;
$c=--$b- --$b;  //先计算--$b的值为4，再自减1为3,即$c=4-3,输出值为1
echo '--$b- --$b的值为：'.$c."<br/>";

?>