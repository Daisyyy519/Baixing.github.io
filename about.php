<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="about.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ma+Shan+Zheng&display=swap" rel="stylesheet">
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
	<div class="toptext">
	  <div class="line"></div>
    <div class="tleft">
      <h3>
        <?php
        echo "这是一个相互陪伴的故事";
         ?>
       </h3>
		<br>
       <div class="ltext">
         <?php
         echo "<span>". "从2000年营业至今，我们从未间断过。22年的坚持来自于顾客的支持，". "</span>";
         echo "和顾客打交道已经成为了生活中一件愉快的事，我们一直与顾客同心。"."<br>"."<br>";
         echo "我们享受顾客举行的"."<span>"."婚礼盛典,"."</span>"."用服务传达美好的祝福；我们欣喜顾客举办的"."<span>"."儿童生日聚会"."</span>"."或"."<span>"."老人寿宴,". "</span>"."用真诚传达幸福的情绪；我们感同身受着每一个有需求的顾客，并相互陪伴着度过如此重要的时刻。";
         ?>
       </div>
     </div>
	<div class="rtit">
       <h2>
         <?php
          echo "关于我们";
          ?>
       </h2>
       <div id="etit">
         <img src="img/calligraphy image/about.png" width="80%">
		 </div>
      </div>
  </div>

	<div class="part1">
    <div class="tit1">
      <h4>
		  <?php
		  echo "我们的核心"."<br>";
		  ?>
		</h4>
		<p id="be">
			<?php
			echo "STRATEGY";
			?>
		</p>
    </div>

    <div class="slideshow-container">

<div class="mySlides fade">
  <img src="img/store/strategy2.jpg" style="width:100%">
	<div class="text"> <span> 随和 </span><br> 轻松和谐，倾听顾客需求</div>
</div>

<div class="mySlides fade">
  <img src="img/store/strategy3.jpg" style="width:100%">
	<div class="text"> <span>开放</span> <br> 全面服务，满足顾客需求</div>
</div>

<div class="mySlides fade">
  <img src="img/store/strategy1.jpg" style="width:100%">
	<div class="text"> <span>负责</span> <br> 诚信经营，得到顾客信任</div>
</div>
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

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
  let dots = document.getElementsByClassName("dot");
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
}
</script>

	<div class="part2">
	<div class="tit2">
	  <h4>
		  <?php
		  echo "我们的信念"."<br>";
		  ?>
		</h4>
		<p id="be">
			<?php
			echo "CULTURE";
			?>
		</p>
	</div>
	<div class="vtit">
      <h3>
        <?php
          echo "愿景";
         ?>
      </h3>
      <p id="ve">
        <?php
          echo "VISION";
         ?>
		</p>
	   <ul>
           <li> 我们会用真挚的经营理念继续服务广大消费者</li>
              <li>用货真价实的商品继续回馈给广大消费者</li>
            </ul>

       </div>
	<div class="vertical"></div>
	<div class="mission">
          <div class="mtit">
            <h3>
              <?php
                echo "使命";
               ?>
            </h3>
            <div id="ve">
              <?php
                echo "MISSION";
               ?>
             </div>
           </div>

             <div class="mtext">
               <ul>
                 <li> 热情待客，满足顾客需求</li>
                    <li>诚信经营，保证货真价实</li>
                      <li>与同行保持良好的竞争关系</li>
                  </ul>
                </div>
              </div>
	    </div>

	<div class="part3">
	<div class="stit">
         <h4>
		  <?php
		  echo "我们的服务"."<br>";
		  ?>
		</h4>
		<p id="be">
			<?php
			echo "SERVICE";
			?>
		</p>
       </div>
	<div class="stext">
         <?php
          echo "我们会以"."<span>"."最实用和实惠"."</span>"."的方案为您定制专属宴请需求，并且有"."<span>"."免费"."</span>"."的宴请送货服务。". "<br>". "<br>";
          echo "如果您有格外数量的商品需求，我们会在"."<span>"."第一时间"."</span>"."为您补齐。";
          ?>
		</div>
		<div class="sevimg">
			<img src="img/store/service 1.jpg" width="30%">
		</div>
	</div>

  <div class="tip">
	  如果您想购买<span>香烟 </span>，请直接<span><a href="contact.php">与我们联系</a></span>.我们可以在第一时间为您发货
   </div>

	<div class="part4">
   <div class="ptit">
	   <h3>
		  <?php
		  echo "我们的合作伙伴"."<br>";
		  ?>
		</h3>
		<p id="coe">
			<?php
			echo "COOPERATIVE PARTNERS";
			?>
		</p>
   </div>
		<div class="logolist">
     <ul>
     <li> <img src="img/icon/fenjiu.png" alt="Fenjiu" width="55%"> </li>
	  <li>  <img src="img/icon/jiannanchun.png" alt="Jiannanchun" width="30%"></li>
        <li> <img src="img/icon/yancao.png" alt="tobacco" width="35%">  </li>
         <li>  <img src="img/icon/wuliangye.png" alt="Wuliangye" width="30%">  </li>
          <li> <img src="img/icon/tuopai.png" alt="Tuopai" width="40%">  </li>
            <li>  <img src="img/icon/luzhou.png" alt="Luzhoulaojiao" width="28%">  </li>
             <li>  <img src="img/icon/yanghe.png" alt="Yanghe" width="35%">  </li>
              <li>  <img src="img/icon/logo reference.png" alt="Lang" width="22%">  </li>
            </ul>
          </div>
	</div>
  <div class="line"> </div>
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
