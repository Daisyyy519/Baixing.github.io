<!doctype html>
<html>
<head> 
<meta charset="utf-8">
<title>Index Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="index.css">
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
         <form action="menu.php">
          <input type="search" id="search-bar" placeholder="Search here...">
	      <button class="topb" onclick="return search()"> <img src="img/icon/search-20.png" width="25%"> </button>
         </form>
	</div>
		</div>
		<script>
			function search() {
            if (document.getElementById("search_input").value != "") {
                window.location.href = "menu.php" + document.getElementById("search_input").value;
                document.getElementById("search_input").value = "";
            }
            return false;
        }
		</script>
		
	<div class="top_box">
	<div class="line"></div>
     <div class="brandlogo">
	<img src="img/icon/logow.png" width="22%">
     </div>
     <div class="topbrand">
		 <img id="bai" src="img/calligraphy image/baixing.png">
	  <p id="topbrand">
     <?php
     echo "22年老店 / 专营酒水行业";
      ?>
	  <br>
    <span id="topslogan">
      <?php
      echo "品质优选   ·   货真价实   ·   惠民亲民";
       ?>
    </p>
  </div>
     <div class="scoll">
       <img src="img/calligraphy image/scrollicon.png" width="5%">
     </div>
  </div>
		<div class="tips">
     <div class="saleword">
		 "白酒系列正在进行火热的促销中，<span> <b>买二送一 </b></span>，<span><b>买一送一</b></span>，<span><b>满498送100元消费券...</b></span>
     </div>
   </div>
		<div class="products">
     <div class="tit1">
       <h4> 主要商品 </h4>
       <ul id="pro">
         <li><a href="baijiu.php"> <img src="img/icon/baijiu.png" width="80%";> </a> </li>
         <li><a href="tea.php"> <img src="img/icon/tea.png" width="80%";> </a> </li>
         <li><a href="drinks.php"> <img src="img/icon/drinks.png" width="80%";> </a> </li>
         <li><a href="gift.php"> <img src="img/icon/gift.png" width="80%";> </a> </li>
       </ul>
     </div>   
   </div>
   <div class="hero">
     <img src="img/store/brand.jpg" width="100%";>
   </div>
	<div class="tit2">
      <h4> 为什么选择我们 </h4>
		 <div class="reason">
        <?php
          echo "我们秉持着货真价实的经营理念；"."<br>";
          echo "给消费者带来省心、放心的商品；"."<br>";
          echo "我们保证商品都是正规渠道进货；"."<br>";
          echo "主要承包宴请、聚会的购货需求；"."<br>";
          echo "单个商品我们同样以批发价销售。";
         ?>
       </div>
		</div>
		<div class="store">
	     <img src="img/store/inside 3.jpg" width="22%">
	</div>
		<div class="part3">
	    <div class="tit3">
		<h4><?php
		  echo "我们的店铺";
			?> </h4>
			</div>
		<div class="left">
		<ul>
			<li> <span>营业时间 </span></li>
			<li> 周一到周日 <br> 早上7：00 - 晚上9:00</li> <br>
		</ul>
	  <br>
		<ul>
			<li> <span>联系电话</span> </li> 
			<li> （0813+）8201077 </li> <br>
			<li id="abotton">
			<img id="bframe" src="img/icon/bframe.png" width="7.8%">	
			<a href="about.php">
			阅读更多关于我们
			</a>
			</li>
		</ul>
	</div>
			<div class="vl"></div>
			<div class="mframe">
			<img src="img/icon/mframe.png" width="65%">
				</div>
			<div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1689.4124837781387!2d104.77790840936868!3d29.345916808685253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x36eeb33f330ea969%3A0xacb1a80479fd3283!2sBaixin%20Wine%20%26%20Cigarette!5e0!3m2!1sen!2smy!4v1646407732301!5m2!1sen!2smy" style="border:0;" allowfullscreen="" loading="lazy" width="420px" height="320px"></iframe>
			</div>
		</div>
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
				<a href="gift.php"><li> 特产 </li> </a>
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
			
		
		
		
		
		
		
		
		
		
		
		
		
		
		