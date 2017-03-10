<?php
function compare($data,$order = 'desc')
{
if(empty($data))
return;

$count = count($data);
for($i=0;$i<$count;$i++)
{
for($j=$i+1;$j<$count;$j++)
{
 $tmp = $data[$i];

 if($order == 'desc')
 {
  if($data[$i] < $data[$j])
  {
   $data[$i] = $data[$j];
   $data[$j] = $tmp;
  }
 }
 else
 {
  if($data[$i] > $data[$j])
  {
   $data[$i] = $data[$j];
   $data[$j] = $tmp;
  }
 }
}
}

return $data;
}
// $a = array("a","aa","aaa","aaaa");
// $aa = array("a","aa");
// $aaa = array("a","aa","aaa");
// $aaaa = array("a","aa","aaa","aaaa");
//
//  $ac = count($a);$aac = count($aa);$aaac = count($aaa);$aaaac = count($aaaa);
//  $c = array($aac, $aaac, $ac, $aaaac);
//
// $data = Array(3,2,1,6,8,10);
// $result = compare($c,'desc');
//
// for ($i=0; $i < $result[0] ; $i++) {
//
//
//
// }

 ?>
