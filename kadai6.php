<?php
function twice($num) {
  return 2*$num;
} 
echo twice(10);
echo "\n";
function add($a, $b) {
  return $a+$b;
}
echo add(3,8);
echo "\n";
$arr=array(1,3,5,7,9);

function A1($arr) {
  $result=1;
  foreach($arr as $value) {
    $result*=$value;
  }
     echo("配列の計算結果は:".$result);
} 
A1($arr);
echo "\n";
function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    if($a>$max_number)  {
      $max_number=$a;
    }
  }
  return $max_number;
}
echo "最大値は".max_array($arr);
echo "\n";
$str="<h1>strip_tag関数</h1>"."<p>あいうえお</p>";
echo strip_tags($str)."\n";
$arr=[1,2];
array_push($arr,3);
echo array_push($arr)."\n";
$arr1=[1,2,3];
$arr2=[10,20,30];
$arr=array_merge($arr1,$arr2);
echo $arr[4]."\n";
$time=mktime(8);
echo date("Y年m月d日h時i分s秒",$time)."\n";
$time=time();
echo $time."\n";
echo date("Y/m/d")."\n";