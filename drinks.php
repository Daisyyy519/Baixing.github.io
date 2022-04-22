<html>
<head>
<meta charset="utf-8">
<title>Drinks page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="drinks2.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
	<img id="rimg" src="img/drinks/cheers.png" width="20%">
    <div class="tagline">
		<ul>
			<li> <img src="img/calligraphy image/drinks.png" alt="drinkstag" width="70%"> </li>
			<li>  <img src="img/calligraphy image/poet1 (5).png" alt="drinkspoet" width="90%"></li>
		</ul>
		</div>
	</div>
	<div class="button">
    <a href="menu.php"> <img src="img/icon/buttom b.png" alt="back" width="80%"> </a>
     </div>

	<div class="slideshow-container">
  <div class="mySlides fade">
    <img src="img/drinks/drinks4.jpg" style="width:100%">
    <div class="text">年轻系 - 乳品饮料</div>
  </div>

  <div class="mySlides fade">
    <img src="img/drinks/drinks2.jpg" style="width:100%">
    <div class="text">年轻系 - 果汁饮料</div>
  </div>

	  <div class="mySlides fade">
    <img src="img/drinks/drinks6.jpg" style="width:100%">
    <div class="text">年轻系 - 碳酸饮料</div>
  </div>

  <div class="mySlides fade">
    <img src="img/drinks/drinks5.jpg" style="width:100%">
    <div class="text">成年系 - 酒精饮料</div>
  </div>

	  <div class="mySlides fade">
    <img src="img/drinks/drinks1.jpg" style="width:100%">
    <div class="text">成年系 - 功能饮料</div>
  </div>


  <div class="mySlides fade">
    <img src="img/drinks/drinks3.jpg" style="width:100%">
    <div class="text"> 家庭系 - 大瓶装饮料</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>
  <br>
	<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
    <span class="dot" onclick="currentSlide(6)"></span>
  </div>

  <script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
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
	<div class="pfooter">
      <div class="ftit">
        <h5> 其他商品 </h5>
        <div class="fline"> </div>
      </div>

      <div class="plist">
        <ul>
          <li> <a href="baijiu.php"> <img src="img/icon/baijiup.png" alt="baijiu" width="45%"> </a> </li>
          <li> <a href="tea.php"> <img src="img/icon/teap.png" alt="tea" width="45%"> </a> </li>
          <li> <a href="gift.php"> <img src="img/icon/giftp.png" alt="drinsk" width="45%"> </a></li>
        </ul>
      </div>
    </div>


	</body>
</html>
