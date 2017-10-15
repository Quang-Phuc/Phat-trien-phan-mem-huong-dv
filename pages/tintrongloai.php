

<!-- box cat-->



<div class="clear"></div>
<div class="box-cat">
	
<?php

$idTin=$_GET["idTin"];
settype($idTin, "int");

settype($idTin, "int");
$sotin1trang=4;
if(isset($_GET["trang"]))
{
    $trang= $_GET["trang"];
    settype($trang, "int");
}
else 
{
   $trang=1;
}
$from = ($trang -1) * $sotin1trang;
            $sautinmoi=TinMoi_PhanTrang($idTin,$from,$sotin1trang);
            // row_bontinmoi sẽ chạy từng dòng trong 4 tin này
            while ($row_sautinmoi = mysql_fetch_array($sautinmoi)){
            ?>
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                    <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_sautinmoi['idTin']?>"><?php echo $row_sautinmoi['TieuDe']?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_sautinmoi['urlHinh']?>" align="left" />
                    <div class="des"><?php echo $row_sautinmoi['TomTat']?></div>
                    <div class="clear"></div>
                   
				</div>
            </div>
           
            
        </div>
    </div>

<div class="clear"></div>

<!-- box cat-->
 <?php }?>
