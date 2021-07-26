<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>智慧居家健身</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">智慧居家健身</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">簡介</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">運動規劃</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">健身資訊</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">動作辨別</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">bmi計算器</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">卡路里計算</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        智慧居家健身
                    </h1>
                    <div class="subheading mb-5">
                        	 
                        <a href="mailto:a0918764991@gmail.com">a0918764991@gmail.com</a>
                    </div>
                    <p class="lead mb-5">在家就能健身!!</p>
                    <div class="social-icons">
                        <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">運動規劃</h2>
                    
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">健身資訊</h2>
                    <video width="400" controls>
                    <source src="video1.mp4" type="video/mp4">
                    Your browser does not support HTML video.
                    </video>
                    <a href="https://www.youtube.com/watch?v=20uf1EcGqjY" target="_blank"></a>
                    <br>15分鐘高强度全身肌肉徒手訓練,無需器材又能在家做的運動｜有效針對全身肌肉的訓練｜男女都適合的訓練【健身運動】</br>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">動作識別</h2>
                    
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">bmi計算器</h2>
                    <p>BMI值計算公式:BMI = 體重(公斤) / 身高2(公尺2)</p>
                    <br>
                    <p>例如：一個52公斤的人，身高是155公分，則BMI為 :52(公斤)/1.552 ( 公尺2 )= 21.6</p>
                    <br>
                    <p>體重正常範圍為  BMI=18.5～24</p>
                    <form action="bmi.php" method="post">
　                  體重(kg): <input type="text" name="weight" />
                    身高(cm):<input type="text" name="tall" />
　                  <input type="submit" value="確認"/>
                    </form> 
					<?php					
					echo $_SESSION['BMI'];
					echo '<br /><a href="bmi.php"></a>';
					?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">卡路里計算</h2>
            <form action="calories.php" name="myform.php" method="post">
            <table border="0" width="100%" cellpadding="4" cellspacing="0">
            <tbody><tr><td><font size="2">五穀根莖類</font></td><td><font size="2">份量</font></td><td><font size="2">奶製品</font></td><td><font size="2">份量</font></td></tr>
            <tr>
            <td>
    	<font size="2">
    	<select name="kcal_item1" style="width:172px">
		    <option value="">-- 請選擇 --		
       	  </option><option value="280">白飯1碗(280)
		  </option><option value="80">稀飯1碗(80)
		  </option><option value="80">麵1碗(80)
		  </option><option value="70">吐司1片(70)
		  </option><option value="70">餐包(70)
		  </option><option value="70">小籠包(70)
		  </option><option value="70">蘿蔔糕1塊(70)
		  </option><option value="280">饅頭1個(280)
		  </option><option value="140">冬粉1把(140)
		  </option><option value="140">米粉1把(140)
		  </option><option value="210">玉米1根(210)
		  </option><option value="140">馬鈴薯1個(140)
		  </option><option value="140">地瓜1個(140)
		  </option><option value="280">紅豆湯1碗(280)
		  </option><option value="140">燒餅1個(140)
		  </option><option value="140">油條1根(140)
        </option></select>
        </font></td>
<td>
		<font size="2">
		<select name="cal1" style="width:172px">
		    <option value="">-- 0 --		
       	  </option><option value="1">1
		  </option><option value="2">2
		  </option><option value="3">3
		  </option><option value="4">4
        </option></select>
        </font></td>
<td>
         <font size="2">
         <select name="kcal_item4" style="width:203px">
		    <option value="">-- 請選擇 --				 
   	       </option><option value="150">全脂奶粉4湯匙(150)
              </option><option value="150">低脂奶粉3湯匙(150)
              </option><option value="80">脫脂奶粉3湯匙(80)
         </option></select>
         </font></td>
<td>
		<font size="2">
		<select name="cal2" style="width:172px">
		    <option value="">-- 0 --		
       	  </option><option value="1">1
		  </option><option value="2">2
		  </option><option value="3">3
		  </option><option value="4">4
        </option></select>
        </font></td>
</tr>
<tr><td><font size="2">魚肉蛋豆類</font></td><td><font size="2">份量</font></td><td><font size="2">油脂類</font></td><td><font size="2">份量</font></td></tr>
<tr>
<td>
        <font size="2">
        <select name="kcal_item2" style="width:172px">
		    <option value="">-- 請選擇 --				
          </option><option value="55">瘦肉1兩(55)
		  </option><option value="55">魚肉1兩(55)
		  </option><option value="165">雞腿1隻(165)
		  </option><option value="55">雞胸肉1兩(55)
		  </option><option value="55">火腿1片(55)
		  </option><option value="55">蛤蠣10顆(55)
		  </option><option value="55">蝦仁10隻(55)
		  </option><option value="55">豆漿240cc(55)
		  </option><option value="55">牛腱1兩(55)
		  </option><option value="55">花枝4片(55)
		  </option><option value="75">小排骨3塊(75)
		  </option><option value="75">司目魚1(75)
		  </option><option value="75">雞蛋1個(75)
		  </option><option value="75">豆腐1塊(75)
		  </option><option value="75">毛豆45公克(75)
		  </option><option value="75">干絲2湯匙(75)
		  </option><option value="75">豆干3片(75)
		  </option><option value="75">油豆腐2個(75)
		  </option><option value="75">肉鬆2湯匙(75)  
		  </option><option value="75">雞翅35公克(75)
		  </option><option value="120">牛腩1兩(120)
		  </option><option value="120">鱈魚1個(120)
		  </option><option value="120">秋刀魚1兩(120)
		  </option><option value="120">麵筋20克(120)
		  </option><option value="120">乳酪1片(120)
        </option></select>
        </font></td>
<td>
		<font size="2">
		<select name="cal3" style="width:172px">
		    <option value="">-- 0 --		
       	  </option><option value="1">1
		  </option><option value="2">2
		  </option><option value="3">3
		  </option><option value="4">4
        </option></select>
        </font></td>
<td>
         <font size="2">
         <select name="kcal_item5" style="width:203px">
		    <option value="">-- 請選擇 --				 
           </option><option value="45">植物油1茶匙(45)
           </option><option value="45">動物油1茶匙(45)
	       </option><option value="45">沙拉醬2茶匙(45)
	       </option><option value="45">瑪琪林1茶匙(45)
	       </option><option value="45">鮮奶油1湯匙(45)
	       </option><option value="45">培根1片(45)
	       </option><option value="45">瓜子50粒(45)
	       </option><option value="45">花生10粒(45)
	       </option><option value="45">芝麻2湯匙(45)
	       </option><option value="45">開心果10粒(45)
         </option></select>
         </font></td>
<td>
		<font size="2">
		<select name="cal4" style="width:172px">
		    <option value="">-- 0 --		
       	  </option><option value="1">1
		  </option><option value="2">2
		  </option><option value="3">3
		  </option><option value="4">4
        </option></select>
        </font></td>
</tr>
<tr><td><font size="2">蔬菜類</font></td><td><font size="2">份量</font></td><td><font size="2">水果類</font></td><td><font size="2">份  量</font></td></tr>
<tr>
<td>
           <font size="2">
           <select name="kcal_item7" style="width:172px">
		     <option value="">-- 請選擇 --				   
             </option><option value="25">芹菜100g(25)
		     </option><option value="25">苦瓜100g(25)
		     </option><option value="25">冬瓜100g(25)
		     </option><option value="25">大白菜100g(25)
		     </option><option value="25">木耳100g(25)
		     </option><option value="25">萵苣100g(25)
		     </option><option value="25">絲瓜100g(25)
		     </option><option value="25">大頭菜100g(25)
		     </option><option value="25">小白菜100g(25)
		     </option><option value="25">金針100g(25)
		     </option><option value="25">油菜100g(25)
		     </option><option value="25">番茄100g
		     </option><option value="25">豆芽100g(25)
		     </option><option value="25">青江菜100g(25)
		     </option><option value="25">韭菜100g(25)
		     </option><option value="25">竹筍100g(25)
		     </option><option value="25">花菜100g(25)
		     </option><option value="25">高麗菜100g(25)
		     </option><option value="25">空心菜100g(25)
		     </option><option value="25">金針菇100g(25)
		     </option><option value="25">碗豆苗100g(25)
		     </option><option value="25">九層塔100g(25)
		     </option><option value="25">四季豆100g(25)
		     </option><option value="25">菠菜100g(25)
		     </option><option value="25">香菇100g(25)
		     </option><option value="25">草菇100g(25)
		     </option><option value="25">洋菇100g(25)
		     </option><option value="25">"地瓜葉100g(25)
		     </option><option value="25">青椒100g(25)               			 				 				 				 				 				 				 
           </option></select>
           </font></td>
<td>
		<font size="2">
		<select name="cal5" style="width:172px">
		    <option value="">-- 0 --		
       	  </option><option value="1">1
		  </option><option value="2">2
		  </option><option value="3">3
		  </option><option value="4">4
        </option></select>
        </font></td>
<td>
          <font size="2">
          <select name="kcal_item14" style="width:203px">
		    <option value="">-- 請選擇 --				  
            </option><option value="120">柿子1個(120)(120)
	        </option><option value="120">香瓜1個(120)
	        </option><option value="15">黑棗1個(15)
	        </option><option value="120">楊桃1個(120)
	        </option><option value="120">葡萄柚1個(120)
	        </option><option value="60">葡萄8個(60)
	        </option><option value="60">梨子1個(60)
	        </option><option value="60">蘋果1個(60)
	        </option><option value="60">櫻桃9個(60)
	        </option><option value="60">龍眼12個(60)
	        </option><option value="600">鳳梨1個(600)
	        </option><option value="240">哈密瓜1個(240)
	        </option><option value="60">西瓜1個(60)
	        </option><option value="120">芭樂1個(120)
	        </option><option value="60">草莓9個(60)
	        </option><option value="20">蓮霧1個(20)
	        </option><option value="12">山竹1個(12)
	        </option><option value="60">加州梨1個(60)
	        </option><option value="240">芒果1個(240)
	        </option><option value="30">枇杷1個(30)
	        </option><option value="60">柳丁1個(60)
	        </option><option value="60">椪柑1個(60)
	        </option><option value="60">文旦1片(20)
	        </option><option value="120">香蕉1根(120)
	        </option><option value="60">水蜜桃1個(60)
	        </option><option value="12">荔枝1個(12)
	        </option><option value="80">椰子汁1杯(80)
	        </option><option value="240">木瓜1個(240)
	        </option><option value="60">奇異果1個(60)
	        </option><option value="60">棗子3個(60)
	        </option><option value="60">小番茄15個(60)
          </option></select>
          </font></td>
<td>
		<font size="2">
		<select name="cal6" style="width:172px">
		    <option value="">-- 0 --		
       	  </option><option value="1">1
		  </option><option value="2">2
		  </option><option value="3">3
		  </option><option value="4">4
        </option></select>
        </font></td>
</tr>
<tr><td><font size="2">飲料</font></td><td><font size="2">份量</font></td><td><font size="2">點心</font></td><td><font size="2">份量</font></td></tr>
<tr>
<td>
		 <font size="2">
		 <select name="kcal_item3" style="width:203px">
		    <option value="">-- 請選擇 --				 
   	       </option><option value="60">紅茶1杯(60)
           </option><option value="160">珍珠奶茶1杯(160)
	       </option><option value="80">仙草蜜300cc(80)
	       </option><option value="1">健怡可樂355cc(1)
	       </option><option value="110">舒跑355cc(110)
	       </option><option value="330">八寶粥380cc(330)
	       </option><option value="50">三合一咖啡一包(50)
	       </option><option value="80">奶昔1杯(80)
	       </option><option value="150">燒仙草1杯(150)
	       </option><option value="100">養樂多100cc(100)
	       </option><option value="180">原味優酪乳230cc(180)
	       </option><option value="510">柳橙汁900cc(510)
	       </option><option value="155">可樂355cc(155)
	       </option><option value="135">七喜汽水355cc(135)
	       </option><option value="100">罐裝咖啡250cc(100)
	       </option><option value="80">脫脂奶1盒(80)
	       </option><option value="160">鮮奶1盒(160)
	       </option><option value="180">調味奶1盒(160)
				  
         </option></select>
         </font></td>
<td>
		<font size="2">
		<select name="cal7" style="width:172px">
		    <option value="">-- 0 --		
       	  </option><option value="1">1
		  </option><option value="2">2
		  </option><option value="3">3
		  </option><option value="4">4
        </option></select>
        </font></td>
<td>
		<font size="2">
		<select name="kcal_item6" style="width:203px">
		    <option value="">-- 請選擇 --				 
   	      </option><option value="230">甜甜圈1個(230)
          </option><option value="275">花生厚片吐司1塊(275)
	      </option><option value="140">白吐司2塊(140)
	      </option><option value="375">起司蛋糕1塊(375)
	      </option><option value="255">蛋塔1個(255)
	      </option><option value="320">鮮奶油蛋糕1片(320)
	      </option><option value="250">老婆餅1個(250)
	      </option><option value="340">薯條大盒(340)
	      </option><option value="140">蘇打餅乾4片(140)
	      </option><option value="140">布丁1杯(140)
	      </option><option value="280">冰淇淋1杯(280)
	      </option><option value="100">果凍1杯(100)
	      </option><option value="270">肉鬆麵包1個(270)
	      </option><option value="330">肉鬆三明治1個(330)
	      </option><option value="420">火腿蛋1個(420)
	      </option><option value="405">菠蘿麵包1個(405)
	      </option><option value="430">蘋果派1個(430)
	      </option><option value="560">麥香雞1個(560)
	      </option><option value="400">炸雞排1片(400)
	      </option><option value="450">大亨堡1個(450)
	      </option><option value="65">冰棒1枝(65)
        </option></select>
        </font></td>
<td>
		<font size="2">
		<select name="cal8" style="width:172px">
		    <option value="">-- 0 --		
       	  </option><option value="1">1
		  </option><option value="2">2
		  </option><option value="3">3
		  </option><option value="4">4
        </option></select>
        </font></td>
</tr>
<tr><td><font size="2">中式小吃</font></td><td><font size="2">份量</font></td><td><font size="2">酒</font></td><td><font size="2">份量</font></td></tr>
<tr>
<td>
		<font size="2">
		<select name="kcal_item8" style="width:203px">
		    <option value="">-- 請選擇 --				 
   	      </option><option value="380">蚵仔煎1份(380)
          </option><option value="255">水煎包2個(255)
	      </option><option value="40">豬肉水餃1個
	      </option><option value="225">鮮肉包
	      </option><option value="330">筒仔米糕1份(330)
	      </option><option value="270">白飯1碗(270)
	      </option><option value="140">稀飯1碗(140)
	      </option><option value="110">甜豆漿1碗(110)
	      </option><option value="255">蛋餅1份(255) 
	      </option><option value="275">炒米粉1碗(275)
	      </option><option value="385">炸醬麵1碗(385)
	      </option><option value="400">榨菜肉絲麵1碗(400)
	      </option><option value="540">牛肉麵1碗(540)
	      </option><option value="345">速食麵1碗](345)
	      </option><option value="220">蚵仔麵線1碗(220)
	      </option><option value="700">雞排飯1碗(700)
	      </option><option value="510">排骨麵1碗(510)
	      </option><option value="370">臭豆腐1份(370)
	      </option><option value="120">荷包蛋1個(120)
	      </option><option value="185">米粉湯1碗(185)
	      </option><option value="350">肉羹米粉1碗(350)
        </option></select>
        </font></td>
<td>
		<font size="2">
		<select name="cal9" style="width:172px">
		    <option value="">-- 0 --		
       	  </option><option value="1">1
		  </option><option value="2">2
		  </option><option value="3">3
		  </option><option value="4">4
        </option></select>
        </font></td>
<td>
		<font size="2">
		<select name="kcal_item11" style="width:203px">
		    <option value="">-- 請選擇 --				 
   	      </option><option value="35">台灣啤酒100cc(35)
          </option><option value="325">高粱酒100cc(325)
	      </option><option value="105">陳年紹興酒100cc(105)
	      </option><option value="125">米酒100cc(125)
	      </option><option value="190">烏梅酒100cc(190)
	      </option><option value="100">紅葡萄酒100cc(100)
	      </option><option value="75">白葡萄酒100cc(75)
	      </option><option value="230">白蘭地100cc(230)
	      </option><option value="230">威士忌100cc(230)
        </option></select>
        </font></td>
<td>
		<font size="2">
		<select name="cal10" style="width:172px">
		    <option value="">-- 0 --		
       	  </option><option value="1">1
		  </option><option value="2">2
		  </option><option value="3">3
		  </option><option value="4">4
        </option></select>
        </font></td>
</tr>
<tr><td><font size="2">零食類</font></td><td><font size="2">份量</font></td></tr>
<tr>
<td>
		<font size="2">
		<select name="kcal_item9" style="width:203px">
		    <option value="">-- 請選擇 --				 
   	      </option><option value="160">金沙巧克力2粒(160)
          </option><option value="100">蝦味先1包](100)
	      </option><option value="700">洋芋包1包](700)
	      </option><option value="70">青箭口香糖7片(70)
	      </option><option value="100">牛奶糖5塊(100)
	      </option><option value="90">鱈魚香絲1包(90)
	      </option><option value="130">乖乖1包(130)
	      </option><option value="240">可樂果1包(240)
	      </option><option value="380">魷魚絲1包(380)
	      </option><option value="100">沙琪瑪1塊(100)
        </option></select>
        </font></td>
<td>
		<font size="2">
		<select name="cal11" style="width:172px">
		    <option value="">-- 0 --		
       	  </option><option value="1">1
		  </option><option value="2">2
		  </option><option value="3">3
		  </option><option value="4">4
        </option></select>
        </font></td>
</tr>
</tbody></table>
<p></p>

<font size="2">
<input type="submit" value="計算">
</font>
<p></p><p>
你的熱量攝取量:
0<br>
<br>
簡易食品代換算法:<br>
<br>
1.五穀類:1碗飯等於2碗稀飯<br>
2.肉類:三指幅大小的肉片算1份<br>
3.豆類,奶類都是蛋白質,可以跟肉類一起算<br>
4.水果類:拳頭大小的水果算一份<br>
5.蔬菜類:各類蔬菜1碗算1份<br>
6.油脂類:一湯匙油等於一片乳酪
</p><p>
</p></form>
</section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
