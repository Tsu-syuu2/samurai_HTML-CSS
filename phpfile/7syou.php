<?php
    function check($hikisuu) {
        switch($hikisuu) {
            // 42の場合のみ下記の文章を表示
            case 42:
                echo "Answer to the Ultimate Question of Life, the Universe, and Everything";
                break;
            case 43:
                echo "Answer to the Ultimate Question of Life, the Universe, and Everything";
                break;
            case 45:
                echo "Answer to the Ultimate Question of Life, the Universe, and Everything";
                break;
            // 42以外はhikisuuで指定した数を表示
            default:
                echo $hikisuu;
        }
    }
    // hikisuuは42で指定
    $hikisuu = 42;
    // hikisuuのチェック
    check($hikisuu);
?>