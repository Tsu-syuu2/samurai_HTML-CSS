<?php
$num = 0;
// whileを使って$numが42になるまで値を表示する
while($num < 42) {
    echo $num."\n";
    $num++;
}

//別パターン
// while($num != 42) {
//     echo $num."\n";
//     $num++;
// }

//無限ループ
// while(true) {
//     if(42 <= $num) {
//         break;
//     } else {
//         echo $num."\n";
//         $num++;
//     }
// }
?>