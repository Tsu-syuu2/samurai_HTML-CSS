<?php
    // Hogeクラス
    class hoge {
        public function hello($str){
            echo $str;
        }
    }

    // Hogeクラスをインスタンス生成
    $hoge = new hoge();
    
    // helloメソッドを呼び出し
    $hoge -> hello("Hello PHP");
?>