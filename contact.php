<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="contact2.css">
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

	 <div class="tit1">
     <h4>
      联系我们
     </h4>
		  </div>
		 <div class="cimg">
     <img src="img/store/client.png" alt="client" width="15%">
	   </div>
	 <div class="ctext">
		 <p id="ct">
       <?php
        echo "我们很可以受到您的意见或反馈，如果您对我们的商品感兴趣或想咨询其他信息，请用以下方式与我们取得联系，我们尽快回复您。";
        ?>
		 </p>
		 <p id="pt">
       <?php
        echo "祝您生活愉快";
        ?>
		 </p>
      </div>
	<div class="clist">
        <ul>
         <a target="_blank" href="img/icon/QR code2.png">  <li> <img src="img/icon/wechat.png" alt="wechat" >  </li></a>
         <a target="_blank" href="img/icon/QR code3.png"> <li> <img src="img/icon/qq.png" alt="QQ" >   </li> </a>
         <a target="_blank" href="img/icon/QR code1.png"> <li> <img src="img/icon/Alipay.png" alt="Alipay" >  </li> </a>
        </ul>
      </div>
	<div class="info">
           <h4>
             店铺信息
            </h4>
        </div>
	<div class="simg">
          <ul>
            <li>
              <img src="img/icon/time.png" alt="time">
				<p>
              <?php
                echo "<b>". "营业时间:". "</b>". "<br>";
                echo "周一到周日". "<br>";
                echo "早上7:00 - 晚上9:00". "<br>";
               ?>
				</p>
             </li>
			  <br>
              <li>
                <img src="img/icon/phone.png" alt="phone">
				   <p>
                <?php
                  echo "<b>". "周女士：". "</b>";
                  echo "86+15284809998". "<br>";
                  echo "<b>"."固定电话：". "</b>";
                  echo "0813-8201077". "<br>";
                 ?>
				  </p>
               </li>
			  <br>
               <li>
                 <img src="img/icon/location.png" alt="location">
				   <p>
				   <?php
                   echo "<b>"."地址:". "</b>". "<br>";
                   echo "四川省，自贡市，自流井区，". "<br>";
                   echo "丹桂街道，绿盛社区，15组33号". "<br>";
                  ?>
				   </p>
                </li>
			  <br>
                <li>
                  <img src="img/icon/email.png" alt="email">
					<p>
                  <?php
                    echo "<b>"."邮箱地址: ". "</b>";
                    echo "3280619578@qq.com";
                   ?>
					</p>
                 </li>
				</ul>
				</div>
	<div class="table">
        <div class="tabletit">
          <h2>
            <?php
             echo "订阅单";
             ?>
           </h2>
         </div>

         <div class="form">
          <form action="insert.php" method="post">
              <label for="name">姓名/Name</label><br>
                  <input type="text" id="name" name="name" ><br>
              <label for="phnumber">电话号码/Phone Number</label><br>
                  <input type="text" id="photo" name="phone" ><br>
              <label for="email">电子邮箱/Email</label><br>
                  <input type="text" id="email" name="email" ><br>
              <label for="comment">留言/Comment</label><br>
			   <textarea type="text" id="comment" name="comment">请留下您宝贵的意见或建议... </textarea>
			   <br>
			   <br>
               <input type="submit" value="提交">
               <input type="reset" value="重新输入">
           </form>
         </div>
       </div>

	<div class="lineb"> </div>
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
