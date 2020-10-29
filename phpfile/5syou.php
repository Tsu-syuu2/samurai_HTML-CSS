<!--5章課題 一つずつhogeとfuga表示-->
<?php
    $data = ["hoge", "fuga", "hoge", "fuga", "hoge", "fuga", "hoge", "fuga"];
    // 重複するものを削除する変数を作成（$data)
    $uniq = array_unique($data);
    foreach($uniq as $u) {
        echo $u;
    }
    
    // 配列の変数宣言
    // $data = [1, 2, 3];
    
    // 配列の長さを変数へ格納
    // $size = count($data);
    
    // 配列の出力ループ処理
    // for($i = 0; $i < $size; $i++) {
        // echo $data[$i];
        // echo $data[0];
        // echo $data[1];
        // echo $data[2];
    // }
    # => 1 2 3 と表示される
    
    // $data = [1, 2, 3];
    // $size = 3;
    // $i = 3;
    
    // for(１変数の初期化; ２ ５ ８ １１条件式; ４ ７ １０インクリメント;) {
            // ３ ６ ９処理;
    // }
?>