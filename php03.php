<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function double($number){
echo $number*2;
}
double(2);

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
function add($a, $b){
    $result = 0;
    $result = $a + $b;
    return $result;
}
echo add(2,3) . "\n";

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
$arr = array(1,3,5,7,9);
print_r($arr);
function mult($arr){
    $abc=1;
    foreach ($arr as $ar){
        $abc *= $ar;
    }
    echo ("計算結果" . $abc);
    mult($arr);
}
//4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a) {
        if ($a > $max_number){
        $max_number=$a; 
        }
    }
    return $max_number;
}
echo max_array($arr);

//5.次のビルトイン関数の用途、使い方を自分で調べて実際に使ってみてください
//strip_tags
$stag = "<h1>こんちには</h1>"
. "<p>おはようございます</p>";
echo strip_tags($stag);

//array_push
$birds = ["sparrow","duck"];
array_push($birds, "swan", "owl");
print_r($birds);

//array_merge
$fruits1 = ["orange","grapes"];
$fruits2 = ["apple","peach"];
$fruits3 = ["pineapple","banana"];
$merge = array_merge($fruits1, $fruits2, $fruits3);
print_r($merge);

//time, mktime
$time = mktime(9);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  
//date
echo date('Y/m/d');
?>