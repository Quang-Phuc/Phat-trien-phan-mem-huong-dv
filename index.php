<?php
require "lib/dbCon.php";
require "lib/trangchu.php";
if(isset($_GET["p"]))
    $p=$_GET["p"];
else 
    $p="";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Phát triển phần mềm hướng dịch vụ</title>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
 <link type="text/css" rel="stylesheet" href="css/menu.css" >
  <link type="text/css" rel="stylesheet" href="css/footer.css" >
</head>

<body>
<div id="wrap-vp">
	
    
    
      <div id="midheader-vp">
    	
        
			<!--blocks/thongtinchung.php-->
			<?php require 'blocks/menu.php';?>
        
    </div>
    <div class="clear"></div>

    <div id="slide-vp">
    	<!--blocks/top_trang_chu.php-->
    	<?php require 'blocks/top_trang_chu.php';?>

        
    </div>

  	<div id="content-vp">
    	
        <div id="content-main">
			
			<!--PAGES-->
			<?php
			switch($p)
			{
			    case "tintrongloai" : require "pages/tintrongloai.php";;
			    break;
			    case "chitiettin":require "pages/chitiettin.php";
			    break;
			    case "timkiem": require "pages/timkiem.php";
			    default:require "pages/trangchu.php";
			}
			?>
            <!--Để hiện ra nội dung ở giữa trang-->
        </div>
        <div id="content-right">
		<!--blocks/cot_phai.php-->
	
        </div>

    <div class="clear"></div>
    	
    </div>
    
     
    <div class="clear"></div>
    
    	<!--blocks/footer.php-->
    	<?php require 'blocks/footer.php';?>
        
       
   
    
    
    
</div>

</body>
</html>
