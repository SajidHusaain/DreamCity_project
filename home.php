<?php
session_start();
if(!isset($_SESSION['username'])){
header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
html{ height:100%;  background:  url(images/b.png) no-repeat center center fixed;
    background-size: cover; }
 .main_container{
  margin: 0 auto;
  width: 80%;
  height: auto;
 }
  body{ min-height:100%; padding:0; margin:0; position:relative; }
  body::after{ content:''; display:block; height:100px; }	
	.main_container{
		margin: 0 auto;
		width: 80%;
		height: auto;
	}
	.div{
			border: 5px solid hsla(0,1%,86%,1.00);
		}
.div1:hover{
			border-color: #03997E;
			opacity: 0.5;
		}
		.div2:hover{
			border-color: #D76839;
			opacity: 0.5;
		}
		.div3:hover{
			border-color: #7D3AE1;
			opacity: 0.5;
		}
		.div4:hover{
			border-color: #C73D3D;
			opacity: 0.5;
		}
		.div5:hover{
			border-color: #6D6849;
			opacity: 0.5;
		}
		.div6:hover{
			border-color: #27A112;
			opacity: 0.5;
		}
		.div7:hover{
			border-color: #B08356;
			opacity: 0.5;
		}
		.div7{
			width: 200px;

		}
		.option{
		margin: 0 auto;
		width: 100%;
		height: 550px;
        background: rgba(0,0,0,0.2);
        border-radius: 10px;
        box-shadow: 0px 1px 0px rgb;
		}
	</style>
</head>
<body>
<div class="main_container">
<fieldset>
<legend style="font-size: 50px;color: white"><img src="images/menu.png" width="35" height="35">Menu</legend>
<div class="option">
<a href="logout.php"><img src="images/logout.png" width="40" height="40" style="position: absolute;left:85%;top:10%"></a>
<br />
<br />
<br />
<br />
<br />
<center>
<a href="search.php"><div class="div div1" bgcolor="#03997E" style="width: 25%;height: 125px;background: url(images/search.png) top right no-repeat,url(images/txtsearch.png) no-repeat bottom left #03997E;display: inline-block;display: inline-block"></div></a>
<a href="slip1.php"><div class="div div2" bgcolor="#D76839" style="width: 25%;height: 125px;background:url(images/reciept.png) no-repeat top right,url(images/site_plan.png) no-repeat bottom left #D76839;display: inline-block"></div></a>
<a href="slip2.php"><div class="div div3" bgcolor="#7D3AE1" style="width: 25%;height: 125px;background: url(images/reciept.png) no-repeat top right,url(images/share_certificate.png) no-repeat bottom left #7D3AE1;display: inline-block"></div></a>	
<a href="slip3.php"><div class="div div4" bgcolor="#C73D3D"  style="width: 25%;height: 125px;background:url(images/reciept.png) no-repeat top right,url(images/letter.png) no-repeat bottom left #C73D3D;display: inline-block"></div></a>
<a href="slip4.php"><div class="div div5" bgcolor="#6D6849" style="width: 25%;height: 125px;background:url(images/reciept.png) no-repeat top right,url(images/provisional_allotment_order.png) no-repeat bottom left #6D6849;display: inline-block"></div></a>
<div class="div div6" bgcolor="#27A112" style="width: 25%;height: 125px;background:url(images/reciept.png) no-repeat top right,url(images/reciept_5.png) no-repeat bottom left #27A112;display: inline-block"></div>	
<div class="div div7" bgcolor="#B08356"  style="width: 25%;height: 125px;background:url(images/reciept.png) no-repeat top right,url(images/reciept_6.png) no-repeat bottom left #B08356;display: inline-block"></div>
</center>
</div>
</fieldset>
</div>
<!-- Main Container Ends -->
<!-- Footer Start-->
<?php include 'footer.php'; ?>
<!-- Footer Ends -->
</body>
</html>