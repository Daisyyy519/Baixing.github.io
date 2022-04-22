<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Menu Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="menu.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ma+Shan+Zheng&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Delius+Unicase:wght@700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="top_nav">
			 <a href="index.php">
             <img id="logo" src="img/icon/logo.png"> </a>
	 <ul class="link">
			<li><a href="index.php">首页</a></li>
			<li><a href="menu.php">菜单</a></li>
			<li><a href="about.php">关于我们</a></li>
			<li><a href="contact.php">联系我们</a></li>
        </ul>

	 <div class="search-container">
         <form action="index.php">
          <input type="search" id="search-bar" placeholder="Search here...">
		  <button class="topb" onclick="return search()"> <img src="img/icon/search-20.png" width="25%"> </button>
         </form>
	</div>
		</div>

	      <div class="part1">
		   <div class="line"></div>
            <img id="menu" src="img/calligraphy image/menu-30.png" width="30%">
             <div id="logoword">
            <img src="img/icon/logow.png" alt="brand" width="15%">
           </div>
          <h4>
           <?php
             echo "保证商品的真实性，承诺商品以批发价格销售，请顾客放心购买";
            ?>
          </h4>
       </div>

         <a href="#logo">
             <img id="btop" src="img/icon/buttom t.png" width="10%"> </a>

	<div class="tips">
		 如果您想购买<span>香烟</span>，请直接<span><a href="contact.php">与我们联系</a></span>，我们可以在第一时间为您发货
		 </div>

 <div class="baijiu">
	<div class="btit">
		<img src="img/calligraphy image/baijiu.png" width="8%">
		<img id="poet" src="img/calligraphy image/poet1 (2).png" width="5%">
	 </div>
 <div class="jp">
	 <a href="baijiu.php">	<img src="img/baijiu/jiangxiang/jiangxiang1.png" width="100%;"> </a> <br><br>
	 <div class="jt">
		 <h3>酱香型白酒</h3>
		 <p>JIANGXIANG</p>
	 </div>
		</div>

		<div class="np">
			<img id="dic" src="img/calligraphy image/disc.png" width="35%">
			<a href="baijiu.php"> <img src="img/baijiu/nongxiang/nongxiang7.png" width="100%"> </a><br><br>
		 <div class="nt">
		 <h3>浓香型白酒</h3>
		 <p>NONGXIANG</p>
	 </div>
 </div>
 </div>

 <div class="tea">
		<div class="ttit">
		<img id="poet" src="img/calligraphy image/poet1 (8).png" width="35%">
		<img src="img/calligraphy image/teaw.png" width="35%">
	 </div>
		<img id="lt" src="img/tea/ltea.png" width="20%">
	 <img id="rt" src="img/tea/rtea.png" width="25%">

	 <ul>
		 <li> <a href="tea.php"> <img src="img/tea/black 2.jpg" width="85%"> </a> <br> <h3> 红茶 </h3> <p> BLACKTEA</p></li>
		 <li> <a href="tea.php"> <img id="midimg" src="img/tea/dark.jpg" width="85%"> </a> <br> <h3> 黑茶 </h3>  <p> DARKTEA</p> </li>
		 <li> <a href="tea.php"> <img src="img/tea/oolong 1.jpg" width="85%"> </a> <br> <h3> 乌龙茶 </h3> <p> OOLONGTEA</p> </li>
	 </ul>
 </div>

 <div class="drink">
	 <div class="dtit">
		<img src="img/calligraphy image/drinks.png" width="8%">
		<img id="poet" src="img/calligraphy image/poet1 (3).png" width="5%">
	 </div>
	 <ul>
		 <li> <a href="drinks.php"> <img src="img/drinks/menu1.png" width="120%"> </a> <h3> 年轻系 </h3> <p> YOUNG SERIES</p></li>
		 <li> <a href="drinks.php"> <img src="img/drinks/menu2.png" width="120%"> </a> <h3> 成年系 </h3> <p> ADULT SERIES</p> </li>
		 <li> <a href="drinks.php"> <img src="img/drinks/menu3.png" width="120%"> </a> <h3> 家庭系 </h3> <p> FAMILY SERIES</p> </li>
	 </ul>
 </div>

 <div class="gift">
	 <div class="gtit">
		<img id="poet" src="img/calligraphy image/poet1 (1).png" width="20%">
		<img src="img/calligraphy image/location product.png" width="35%">
	 </div>
	 <ul>
		 <li> <a href="gift.php"> <img id="gjiu" src="img/speciality/speciality6.png" width="130%"> </a> <br> <h3> 纪念型白酒 </h3> <p> COMMEMORATION</p></li>
		 <li> <a href="gift.php"> <img id="glocal" src="img/speciality/speciality3.png" width="70%"> </a> <br> <h3> 当地特产 </h3> <p>LOCAL SPECIALITY</p> </li>
	 </ul>
	 <img id="gbg" src="img/calligraphy image/zigongword.png" width="30%">
 </div>

	<div class="bline"></div>

 <div class="fcontainer">
	 <div class="footer">
	 <div class="footerlogo">
		 <img src="img/icon/flogo-23.png" width="20%">
	 </div>
		 <div class="footernav">
		 <ul id="main">
			 <a href="index.php"> <li> 首页 </li> </a>
			 <li> 丨 </li>
			 <a href="menu.php"> <li> 菜单 </li> </a>
			 <li> 丨 </li>
			 <a href="about.php"> <li> 关于我们 </li> </a>
			 <li> 丨 </li>
			 <a href="contact.php"> <li> 联系我们 </li> </a>
		 </ul>
								 <br><br>
		 <ul id="pnav">
			 <a href="baijiu.php"> <li> 白酒 </li> </a>
			 <li> 丨 </li>
			 <a href="tea.php"> <li> 茶叶 </li> </a>
			 <li> 丨 </li>
			 <a href="drinks.php"> <li> 饮品 </li> </a>
			 <li> 丨 </li>
			 <a href="gift.php"> <li> 特产 </li> </a>
		 </ul>
	 </div>
	 </div>
		 <div class="footerb">
		 <h5>
			 <?php
			 echo "品质优选 · 货真价实 · 惠民亲民";
			 ?>
		 </h5>
		<a href="contact.php">	<button class="sbutton"><span>点击订阅</span> <br>
			 SUBSCRIPTION
			</button> </a>
	 </div>
		 <div class="linef"> </div>
		 <div class="copyright">
		 <?php
		 echo "© DAISIYI 2022FYP OFFICIAL WEB";
		 ?>
		 </div>
	 </div>

</body>
</html>
