<?php
$t = 1;
$t1 = 1;
$handle = popen(".\information7.py","r");
sleep(10);
$file_href = file("./href7.txt");
$lines = file("./text7.txt");
$txt = array("1"=>"","2"=>"","3"=>"","4"=>"","5"=>"","6"=>"","7"=>"","8"=>"","9"=>"","10"=>"");
$href = array("1"=>"","2"=>"","3"=>"","4"=>"","5"=>"","6"=>"","7"=>"","8"=>"","9"=>"","10"=>"");
foreach($lines as $line => $content){
    $txt[$t] = $content;
    $t = $t+1;
}
foreach($file_href as $line => $h){
    $href[$t1] = $h;
    $t1 = $t1+1;
}
?>
<!DOCTYPE html>
<html lang="en">
    <title>emi wong</title>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>emi wong</title>
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
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#1">第一部</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#2">第二部</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#3">第三部</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#4">第四部</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#5">第五部</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#6">第六部</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#7">第七部</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#8">第八部</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#9">第九部</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#10">第十部</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#switch">切換排序</a></li>
                </ul>
            </div>
        </nav>
<section class="resume-section" id="1">
                <div class="resume-section-content">
                    <h2 class="mb-5">近期第1部片</h2>
                    <div>
                    <h><?php echo $txt[1]?></h>
                    <br>
                    <?php 
                    echo "<a href=";
                    echo $href[1];
                    echo ">點擊此處</a>前往觀看";
                    ?>
					</div>
                </div>
            </section>
            <hr class="m-0" />
            <!---->
            <section class="resume-section" id="2">
                <div class="resume-section-content">
                    <h2 class="mb-5">近期第2部片</h2>
                    <div>
                    <h><?php echo $txt[2]?></h>
                    <br>
                    <?php 
                    echo "<a href=";
                    echo $href[2];
                    echo ">點擊此處</a>前往觀看";
                    ?>
					</div>
                </div>
            </section>
            <hr class="m-0" />
            <!---->
                        <section class="resume-section" id="3">
                <div class="resume-section-content">
                    <h2 class="mb-5">近期第3部片</h2>
                    <div>
                    <h><?php echo $txt[3]?></h>
                    <br>
                    <?php 
                    echo "<a href=";
                    echo $href[3];
                    echo ">點擊此處</a>前往觀看";
                    ?>
					</div>
                </div>
            </section>
            <hr class="m-0" />
            <!---->
                        <section class="resume-section" id="4">
                <div class="resume-section-content">
                    <h2 class="mb-5">近期第4部片</h2>
                    <div>
                    <h><?php echo $txt[4]?></h>
                    <br>
                    <?php 
                    echo "<a href=";
                    echo $href[4];
                    echo ">點擊此處</a>前往觀看";
                    ?>
					</div>
                </div>
            </section>
            <hr class="m-0" />
                        <!---->
                        <section class="resume-section" id="5">
                <div class="resume-section-content">
                    <h2 class="mb-5">近期第5部片</h2>
                    <div>
                    <h><?php echo $txt[5]?></h>
                    <br>
                    <?php 
                    echo "<a href=";
                    echo $href[5];
                    echo ">點擊此處</a>前往觀看";
                    ?>
					</div>
                </div>
            </section>
            <hr class="m-0" />
                        <!---->
                        <section class="resume-section" id="6">
                <div class="resume-section-content">
                    <h2 class="mb-5">近期第6部片</h2>
                    <div>
                    <h><?php echo $txt[6]?></h>
                    <br>
                    <?php 
                    echo "<a href=";
                    echo $href[6];
                    echo ">點擊此處</a>前往觀看";
                    ?>
					</div>
                </div>
            </section>
            <hr class="m-0" />
                        <!---->
                        <section class="resume-section" id="7">
                <div class="resume-section-content">
                    <h2 class="mb-5">近期第7部片</h2>
                    <div>
                    <h><?php echo $txt[7]?></h>
                    <br>
                    <?php 
                    echo "<a href=";
                    echo $href[7];
                    echo ">點擊此處</a>前往觀看";
                    ?>
					</div>
                </div>
            </section>
            <hr class="m-0" />
                        <!---->
                        <section class="resume-section" id="8">
                <div class="resume-section-content">
                    <h2 class="mb-5">近期第8部片</h2>
                    <div>
                    <h><?php echo $txt[8]?></h>
                    <br>
                    <?php 
                    echo "<a href=";
                    echo $href[8];
                    echo ">點擊此處</a>前往觀看";
                    ?>
					</div>
                </div>
            </section>
            <hr class="m-0" />
                        <!---->
                        <section class="resume-section" id="9">
                <div class="resume-section-content">
                    <h2 class="mb-5">近期第9部片</h2>
                    <div>
                    <h><?php echo $txt[9]?></h>
                    <br>
                    <?php 
                    echo "<a href=";
                    echo $href[9];
                    echo ">點擊此處</a>前往觀看";
                    ?>
					</div>
                </div>
            </section>
            <hr class="m-0" />
                        <!---->
                        <section class="resume-section" id="10">
                <div class="resume-section-content">
                    <h2 class="mb-5">近期第10部片</h2>
                    <div>
                    <h><?php echo $txt[10]?></h>
                    <br>
                    <?php 
                    echo "<a href=";
                    echo $href[10];
                    echo ">點擊此處</a>前往觀看";
                    ?>
					</div>
                </div>
            </section>
            <hr class="m-0" />
            <hr class="m-0" />
                        <!---->
                        <section class="resume-section" id="switch">
                <div class="resume-section-content">
                    <h2 class="mb-5">切換</h2>
                    <div>
                    <input type="button" value="依照熱門度" onclick="location.href='ytb7_2.php'">
                    <input type="button" value="回首頁" onclick="location.href='index.php'">
					</div>
                </div>
            </section>
            <hr class="m-0" />
</body>
</html>.py","r");.py","r");