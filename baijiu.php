<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Product Baijiu</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="baijiu2.css">
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
	<div class="header">
    <div class="line"></div>
    <img id="tpimg" src="img/baijiu/baijiu background2.png" width="40%">
    <div class="tagline">
		<ul>
			<li> <img src="img/calligraphy image/baijiu.png" alt="drinkstag" width="8%"> </li>
			<li> <img id="poet" src="img/calligraphy image/poet1 (7).png" alt="drinkspoet" width="6%"></li>
		</ul>
		</div>
	</div>
	<div class="button">
    <a href="menu.php"> <img src="img/icon/buttom b.png" alt="back" width="80%"> </a>
     </div>

    <div class="jtit">
      <h3>
		  <?php
		 echo "酱香型";
		  ?>
		</h3>
		<p id="je"> JIANGXIANG </p>
    </div>

	<div class="container">
  <div class="mySlides">
    <img src="img/baijiu/jiangxiang/jiangxiang1.png" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="img/baijiu/jiangxiang/jiangxiang2.png" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="img/baijiu/jiangxiang/jiangxiang3.png" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="img/baijiu/jiangxiang/jiangxiang4.png" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="img/baijiu/jiangxiang/jiangxiang5.png" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="img/baijiu/jiangxiang/jiangxiang6.png" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="img/baijiu/jiangxiang/jiangxiang1.png" style="width:140%" onclick="currentSlide(1)" alt="<b> 郎酒白酒</b> <br> 度数：53°<br>回沙发酵，历年洞藏 <br>标价：¥300">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/baijiu/jiangxiang/jiangxiang2.png" style="width:140%" onclick="currentSlide(2)" alt="<b>青花郎酒</b> <br> 度数：53°<br> 九次蒸酿，回沙发酵 <br> 标价：¥1299">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/baijiu/jiangxiang/jiangxiang3.png" style="width:140%" onclick="currentSlide(3)" alt="<b>红花郎酒 </b><br> 度数：53°<br> 九次蒸煮，八次发酵，七次取酒 <br> 标价：¥848">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/baijiu/jiangxiang/jiangxiang4.png" style="width:140%" onclick="currentSlide(4)" alt="<b>丹泉洞藏15年 </b><br> 度数：53°<br> 天然洞藏，大曲坤沙 <br> 标价：¥600 ">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/baijiu/jiangxiang/jiangxiang5.png" style="width:140%" onclick="currentSlide(5)" alt="<b>丹泉洞藏10年</b><br> 度数：50°<br> 坤沙工艺，纯粮酿造 <br> 标价：¥227">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/baijiu/jiangxiang/jiangxiang6.png" style="width:140%" onclick="currentSlide(6)" alt="<b>习酒窖藏1988</b><br> 度数：50°<br> 固态发酵，九次蒸煮 <br> 标价：¥848">
    </div>
  </div>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
	<div class="jiangtag">
    <p> 酱香突出  丨  幽雅细腻  丨  酒体醇厚  丨  回味悠长  丨  空杯留香 </p>
  </div>
	<div class="bbotm">
		<a href="menu.php"> <img src="img/icon/buttom b.png" width="8%"> </a>
	</div>
	<div class="line"></div>

	<div class="jtit2">
      <h3>
		  <?php
		 echo "浓香型";
		  ?>
		</h3>
		<p id="je"> NONGXIANG </p>
    </div>

	<div class="container2">
		<div class="card_1">
			<div class="imgBx">
				<img src="img/baijiu/nongxiang/nongxiang1.png">
			</div>
			<div class="content">
				<h2>泸州老窖紫砂大曲</h2>
				<p> 度数：52°<br> 制法：纯粮酿造，循环发酵，天然洞藏 <br> 标价：¥329<br><br> 现在购买即<h4>满498送100元消费券</h4></p>
			</div>
		</div>
		<div class="card">
			<div class="imgBx">
				<img src="img/baijiu/nongxiang/nongxiang2.png">
			</div>
			<div class="content">
				<h2>洋河天之蓝</h2>
				<p> 度数：52°<br> 制法：低温发酵，低温蒸馏 <br> 标价：¥409</p>
			</div>
		</div>
		<div class="card">
			<div class="imgBx">
				<img src="img/baijiu/nongxiang/nongxiang3.png">
			</div>
			<div class="content">
				<h2>五粮金樽-红樽</h2>
				<p> 度数：52°<br> 制法：生态发酵，古法酿造 <br> 标价：¥488</p>
			</div>
		</div>
		<div class="card">
			<div class="imgBx">
				<img src="img/baijiu/nongxiang/nongxiang4.png">
			</div>
			<div class="content">
				<h2>五粮头曲</h2>
				<p> 度数：52°<br> 制法：纯粮酿造，传统酿造工艺 <br> 标价：¥95</p>
			</div>
		</div>
		<div class="card">
			<div class="imgBx">
				<img src="img/baijiu/nongxiang/nongxiang5.png">
			</div>
			<div class="content">
				<h2>剑南春鉴藏</h2>
				<p> 度数：52°<br> 制法：古窖发酵，传统酿造，陶坛贮存 <br> 标价：¥1199</p>
			</div>
		</div>
		<div class="card">
			<div class="imgBx">
				<img src="img/baijiu/nongxiang/nongxiang6.png">
			</div>
			<div class="content">
				<h2>泸州老窖-国窖1573</h2>
				<p> 度数：52°<br> 制法：纯粮酿造，循环发酵，天然洞藏 <br> 标价：¥1259</p>
			</div>
		</div>
		<div class="card_1">
			<div class="imgBx">
				<img src="img/baijiu/nongxiang/nongxiang7.png">
			</div>
			<div class="content">
				<h2>泸州老窖-窖龄60年</h2>
				<p> 度数：52°<br> 制法：生态发酵，古法酿造，循环发酵 <br> 标价：¥508 <br><br><h4> 现在购买即可获得买一赠一的优惠福利</h4> </p>
			</div>
		</div>
		<div class="card">
			<div class="imgBx">
				<img src="img/baijiu/nongxiang/nongxiang8.png">
			</div>
			<div class="content">
				<h2>洋河-梦之蓝M6+</h2>
				<p> 度数：52°<br> 制法：百年窖池，超长发酵，添加陈酒 <br> 标价：¥881</p>
			</div>
		</div>

		</div>
	<div class="nongtag">
    <p> 香  丨  醇  丨  浓  丨  绵  丨  甜  丨  净 </p>
  </div>

	<div class="tips">
     <div class="saleword">
		 <p> 如果您想了解具体价格，请 <a href="contact.php"> <span> 联系我们 </span></a> </p>
     </div>
   </div>

	<div class="pfooter">
      <div class="ftit">
        <h5> 其他商品 </h5>
        <div class="fline"> </div>
      </div>

      <div class="plist">
        <ul>
          <li> <a href="tea.php"> <img src="img/icon/teap.png" alt="tea" width="45%"> </a> </li>
		  <li> <a href="drinks.php"> <img src="img/icon/drinksp.png" alt="tea" width="45%"> </a> </li>
          <li> <a href="gift.php"> <img src="img/icon/giftp.png" alt="drinsk" width="45%"> </a></li>
        </ul>
      </div>
    </div>
</body>
</html>
