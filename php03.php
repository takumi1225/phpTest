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
function mult ($arr){
echo $arr*$array;
}
mult(1,3,5,7,9);
echo mult(). "\n";
//4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください

//5.次のビルトイン関数の用途、使い方を自分で調べて実際に使ってみてください


?>