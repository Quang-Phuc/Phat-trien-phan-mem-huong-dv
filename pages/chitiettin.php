<?php
if(isset($_GET["idTin"]))
{
$idTin=$_GET["idTin"];
settype($idTin, "int");
}
else 
{
    $idTin=1;
}
$tin=ChiTietTIn($idTin);
$row_tin=mysql_fetch_array($tin);
?>
<h1 class="title"><?php echo  $row_tin["TieuDe"]?></h1>
<div class="des">
<?php echo  $row_tin["TomTat"]?>
</div>
<div class="chitiet">
<!--noi dung-->
  <?php echo  $row_tin["Content"]?>
<!--//noi dung-->
</div>




