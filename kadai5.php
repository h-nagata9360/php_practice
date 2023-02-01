<?php
$name="h-nagata";
if ($name=="h-nagata") {
  echo "私はh-nagataです。";
} else {
  echo "h-nagataではありません。";
}
echo "\n";
$total=0;
for ($i=0; $i<=10000; $i++) {
  $total+=$i;
}
echo $total;
echo "\n";
$fruits=["apple","banana","melon","strowbelly","orange"];
foreach($fruits as $fruits){
  echo "要素は".$fruits;
  echo "\n";
}
echo "\n";
$start=1;
$end = 100;

for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}