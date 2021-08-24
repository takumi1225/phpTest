<?php

//1. $a　という変数に3を、$b　という変数に7を代入して、echoを使って$a+$bの結果を表示してみましょう。
$a = 3;
$b = 7;
 echo $a + $b;

//2. $array_month という配列に1月〜12月の文字列を代入し、echoで8月を表示してみましょう。
$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7];

//3. $hello　という変数に　”Hello, “を $name という変数にあなたの名前を、　
   // $world という変数に　”‘s World!” を代入して、各変数を連結させて “Hello, あなたの名前’s World!” と表示してみましょう。
$hello = "Hello";
$name = "Takumi";
$world = "‘s World!";
$hello. $name. $world;

//4. $tech_boostに “tech “という文字列が代入されています。複合演算を使って、echo $tech_boost:と実行すると「tech boost」と表示されるように実装してみましょう。
$tech_boost='tech';
$tech_boost.='boost';
 echo $tech_boost;

//5. 【応用】次のプログラムにはバグがあります。どこにバグが有るか調べて修正してみましょう。(バグは1つとは限りません。)

$calendar_2020 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2020["December"];

?>

<?php
$height = 160;
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
}

$height = 160;
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} else {
  echo "ご乗車になれます。";
}

$height = 230;
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} else if ($height >= 200){
  echo "200cm 以上の方はご乗車できません。";
} else {
  echo ($height < 150) ? "150cm 未満の方はご乗車できません。" : "ご乗車になれます。";;
}

$weekday = "月曜";
switch ($weekday) {
  case "月曜":
    echo "可燃ごみの日です。";
    break;
  case "水曜":
    echo "資源ごみの日です。";
    break;
  default:
    echo "回収はありません。";
    break;
}

for($i = 0; $i < 10; $i++){
  echo $i;
}

$total = 0;
echo $total;
for ($i = 0; $i <= 100; $i++) {
  $total += $i;
}
echo $total;
?>