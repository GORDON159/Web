<?php
require('config.php');
$account=$_POST['account'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$phone = $_POST['phone'];
if($password!=$password2){
    $pass=0;
}else{
    $pass=1;
}

if($pass==1){
    $name=$_POST['name'];
    $link=mysqli_connect($db_host,$db_user,$db_pass,$db_name,33060);
    if(!$link){
        echo mysqli_error($link);
    }
        mysqli_query($link,"SET NAMES 'utf8'");
        $result=mysqli_query($link,"insert into `susers` (`name`, `email`, `password`,`phone`)
        VALUES ('$name', '$account', '$password','$phone')");
    if($result){
        echo "<meta http-equiv = 'refresh' content = '0;url=main.php' >
        <script language='javascript'>
            alert('註冊完成');
        </script>";
    }else{
        echo mysqli_error($link);
    }
}else{
    echo '<meta http-equiv = "refresh" content = "0;url=register.html" >';
    echo '<script language="javascript"> alert("密碼輸入錯誤"); </script>';
}
?>
