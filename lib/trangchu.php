<?php
function TinMoiNhat_MotTin(){
   $qr="
       SELECT * FROM tin
       ORDER BY idTin DESC
       LIMIT 0,1
       " ;
   return mysql_query($qr);
}
function TinMoiNhat_BonTin(){
    $qr="
       SELECT * FROM tin
       ORDER BY idTin DESC
       LIMIT 1,6
       " ;
    return mysql_query($qr);
}
function TinMoiNhat_SauTin(){
    $qr="
       SELECT * FROM tin
       ORDER BY idTin DESC
       LIMIT 1,6
       " ;
    return mysql_query($qr);
}
function TinMoi($qr){
    $qr="
       SELECT * FROM tin
        WHERE idTin=$idTin;
         ORDER BY idTin DESC
       LIMIT 1,6
       " ;
    return mysql_query($qr);
}

function TinMoi2($idTin){
    $qr="
    SELECT * FROM tin
    WHERE idTin=$idTin;
    ORDER BY idTin DESC
    
    " ;
    return mysql_query($qr);
}

function TinMoi_PhanTrang($idTin,$from,$sotin1trang){
    $qr="
    SELECT * FROM tin
     WHERE idTin=$idTin
       ORDER BY idTin DESC
    LIMIT $from,$sotin1trang;
      
    " ;
    return mysql_query($qr);
}

function ChiTietTIn($idTin){
    $qr="
       SELECT * FROM tin
       WHERE idTin=$idTin
       " ;
    return mysql_query($qr);
}
function TimKiem($tukhoa)
{
    $qr=" 
        SELECT * FROM tin 
        WHERE TieuDe REGEXP '$tukhoa'
        ORDER BY idTin DESC
        ";
    return mysql_query($qr);
}
?>
