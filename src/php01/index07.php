<?php
function triangle($height, $bottom){
    $area = $height + $bottom / 2;
if($area >210){
    echo "合計点は" . $area . "なので合格です";
    }else{
    echo "合計点は" . $area . "なので不合格です";
    }
}
triangle(30, 25, 100);
