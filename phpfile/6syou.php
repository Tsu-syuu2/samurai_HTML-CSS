<?php
 function check($hikisuu){
      if($hikisuu == 42){
         //  hikisuuが42の時のみ下記の文章を表示
          echo "Answer to the Ultimate Question of Life, the Universe, and Everything";
      } else if($hikisuu < 42) {
          echo "42未満です";
      } else {
          echo "42を越えています";
      }
  }
 //  hikisuuを42で指定
 $hikisuu = 100;
 // hikisuuのチェック
 check($hikisuu);
?>

