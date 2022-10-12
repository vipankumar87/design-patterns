<?php
require '../vendor/autoload.php';
$arr = range(1,20);

//dd(array_map(fn($val)=> [$val], $arr));

//dd(['odd'=> array_filter($arr,fn($item)=>$item%2==1), 'even'=>array_filter($arr,fn($item)=>$item%2==0)]);

//dd(array_product([2,3,2]));

//$max = array_reduce(range(1,10), fn($a, $b)=> max($a, $b));
//dd($max);

//function myfunction($v1,$v2)
//{
//    return $v1 . "-" . $v2;
//}
//$a=array("Dog","Cat","Horse");
//print_r(array_reduce($a,"myfunction"));

function myfunction($v1,$v2)
{
    return $v1 . "-" . $v2;
}
$a=array("Dog","Cat","Horse");
print_r(array_reduce($a,"myfunction",5));