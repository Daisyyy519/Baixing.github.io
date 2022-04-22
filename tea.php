<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Product Tea</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="tea.css">
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
    <img id="ltea" src="img/tea/ltea.png" width="12%">
	<img id="rtea" src="img/tea/rtea.png" width="20%">
    <div class="tagline">
		<ul>
			<li> <img src="img/calligraphy image/teaw.png" alt="drinkstag" width="8%"> </li>
			<li> <img id="poet" src="img/calligraphy image/poet1 (4).png" alt="drinkspoet" width="6%"></li>
		</ul>
		</div>
	</div>
	<div class="button">
    <a href="menu.php"> <img src="img/icon/buttom b.png" alt="back" width="80%"> </a>
     </div>
	<div class="btit">
      <h3> 红茶 </h3>
		<p id="be"> BLACK TEA </p>
	</div>
		 <img id="ltea2" src="img/tea/ltea.png" width="12%">
	<div class="slideshow-container">
  <div class="mySlides1">
    <img src="img/tea/black 1.png" style="width:100%">
  </div>

  <div class="mySlides1">
    <img src="img/tea/black 2.png" style="width:100%">
  </div>

  <div class="mySlides1">
    <img src="img/tea/black 3.png" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>
	<br>

	<div class="mline"></div>

	<div class="btit">
      <h3> 乌龙茶 </h3>
		<p id="be"> OOLONG TEA </p>
    </div>
	 <img id="rtea2" src="img/tea/rtea.png" width="12%">
	<div class="slideshow-container">
  <div class="mySlides2">
    <img src="img/tea/oolong 1.png" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="img/tea/oolong 2.png" style="width:100%">
  </div>

  <div class="mySlides2">
    <img src="img/tea/dark.png" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
</div>
	<br>

<script>
let slideIndex = [1,1];
let slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  let i;
  let x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex[no]-1].style.display = "block";
}
</script>

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
          <li> <a href="baijiu.php"> <img src="img/icon/baijiup.png" alt="baijiu" width="45%"> </a> </li>
          <li> <a href="drinks.php"> <img src= "img/icon/drinksp.png" alt="drinks" width="45%"> </a> </li>
          <li> <a href="gift.php"> <img src="img/icon/giftp.png" alt="gife" width="45%"> </a></li>
        </ul>
      </div>
    </div>


</body>
</html>
