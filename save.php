<?php
              
if(isset($_POST['a1']))
{

$data1=$_POST['a1'];
$data2=$_POST['a2'];
$data3=$_POST['a3'];
$data4=$_POST['a4'];
echo  $data=$data1 . "," . $data2 . "," . $data3 . "," . $data4 ;

$fp = fopen('data.txt', 
'a');
fwrite($fp, $data);
fclose($fp);
}
?>
