<?php
    session_start();
    $weight = $_POST["weight"];
    $tall = $_POST["tall"];
    if (is_numeric($weight) && is_numeric($tall)){
        $tall = $tall /100;
        $bmi = $weight/($tall*$tall);
        $bmi = round($bmi,2);
        $_SESSION['BMI']=$bmi;
        echo "您的bmi值:" . $bmi;
        echo "<br>";
        echo "你的bmi值屬於";
        if ($bmi >=18.5 && $bmi < 24){
            echo "正常";
            echo "<br>";
        }
        if ($bmi <18.5 && $bmi>=0)
        {
            echo "小於範圍";
            echo "<br>";
        }
        if ($bmi >=24)
        {
            echo "大於範圍";
            echo "<br>";
        }
    }
    else{
        echo "輸入錯誤!";
        echo "<br>";
    }
?>
<html>
<head>
<title>BMI計算結果</title>
</head>
<table style="width: 386.725px; border-color: blue; height: 20px; float: left;" border="1">
<tbody>
<tr style="height: 48.5px;">
<td style="width: 83px; height: 48.5px;">&nbsp;</td>
<td style="width: 153px; height: 48.5px;">身體質量指數(BMI)<br />(kg/m2)</td>
<td style="width: 232.725px; height: 48.5px;">腰圍(cm)</td>
</tr>
<tr style="height: 52px;">
<td style="width: 83px; height: 52px;">&nbsp;體重過輕</td>
<td style="width: 153px; height: 52px;">&nbsp;BMI ＜ 18.5</td>
<td style="width: 232.725px; height: 52px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -&nbsp; &nbsp; &nbsp;&nbsp;</td>
</tr>
<tr style="height: 78px;">
<td style="width: 83px; height: 78px;">&nbsp;正常範圍</td>
<td style="width: 153px; height: 78px;">&nbsp;18.5≦BMI＜24</td>
<td style="width: 232.725px; height: 78px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
</tr>
<tr style="height: 136px;">
<td style="width: 83px; height: 136px;">&nbsp;異常範圍</td>
<td style="width: 153px; height: 136px;">
<p>&nbsp;過重：24≦BMI＜27<br />輕度肥胖：</p>
<p>27≦BMI＜30<br />中度肥胖：</p>
<p>30≦BMI＜35<br />重度肥胖：BMI≧35</p>
</td>
<td style="width: 232.725px; height: 136px;">男性：≧90公分<br />女性：≧80公分</td>
</tr>
</tbody>
</table>
<!-- DivTable.com -->
<a href="index.php">回主頁</a>
</html>