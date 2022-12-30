<?php
$mang = array (' Phần tử 1', 'Phần tử 2',3);
echo $mang[0];
$mang2 = array(
'key1' => 'Phần tử 1',
'key2' => 'Phần tử 1',
'key3' => 3
);
echo $mang2['key1'];

$arr=[
    'toan' => 10,
    'ly' =>11
];
 var_dump($arr);

//duyet tung phan tu trong mang
 foreach($mang as $key => $value)
 {
    echo $key. '=>' .$value;
 }
?>