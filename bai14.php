<?php
$connect =mysqli_connect('localhost','phpgroup','php123','mysqli');
var_dump($connect);

//Add them du lieu
$sql="";
$query=mysqli_query($connect,sql);

//select
$sqlslect="";
$queryselect=mysqli_query($query,$sqlslect);

$array_kq=[];

if(mysqli_num_rows($queryselect)>0){
    while($row=mysqli_fetch_assoc($queryselect))
    {
        array_push($array_kq,$row);
    }
}
else{
    echo"Khong co du lieu";
}

echo'<pre>';
var_dump($array_kq);
echo'</pre>';

//update
$sqlupdate="";
$queryupdate=mysqli_query($connect,$sqlupdate);

//delete
$sqldelete="";
$querydelete=mysqli_query($connect,$sqldelete);


//dong ket noi
mysqli_close($connect);
?>