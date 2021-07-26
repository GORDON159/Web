<?php
session_start();
$account=$_POST['account'];
$password=$_POST['password'];
$DB_NAME="gordon";
$DB_PASS="123456";
$DB_NET="localhost";
$DB_BASE="authentication";
$link=mysqli_connect($DB_NET,$DB_NAME,$DB_PASS,$DB_BASE);
if(!$link){
    echo mysqli_error($link);
}
nk,"SET NAmysqli_query($liMES 'utf8'");
$result=mysqli_query($link,"select `account`,`password` from `family_member`");
$result2=mysqli_query($link,"select `name` from `family_member` where `account` like '$account' and `password` like '$password'");
$result3=mysqli_query($link,"select `member_id` from `family_member` where `account` like '$account' and `password` like '$password'");
$member_id=mysqli_fetch_row($result3);
if(!$result){
    echo mysqli_error($link);
}
$name=mysqli_fetch_row($result2);
$accountpass=0;
$str="";
while($row=mysqli_fetch_array($result)){
    if($row['account']==$account&&$row['password']==$password){
        $accountpass=1;
        break;
    }else{
        $accountpass=0;
    }
}
if($accountpass==1){
    $url="main.php";
    $str="歡迎回來".$name['0'];
    $_SESSION['username']=$name['0'];
    $_SESSION['member_id']=$member_id['0'];
}else if($accountpass==0){
    $url="login.html";
    $str="帳號或密碼錯誤";
}
?>
<meta http-equiv = "refresh" content = "0;url=<?php echo $url;?>" >

<!-- library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>



<script language="javascript">
    function alertTest(var word) {
        Swal.fire(
            "查詢作業失敗", //標題 
            word, //訊息內容(可省略)
            "success" //圖示(可省略) success/info/warning/error/question
            //圖示範例：https://sweetalert2.github.io/#icons
        );
    }
</script>
<script>
    alertTest(<?php echo $str;?>)
</script>