<?php
require('config.php');

$account = $_POST['account'];
$password = $_POST['password'];
$refer = $_POST['refer'];
setcookie('ac',$account);
if ($account == '' || $password == '')
{
    // No login information
    echo ("error");
    header('Location: login.php?refer='. urlencode($_POST['refer']));
}
else
{
    // Authenticate user
    $con=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
        //$query = "SELECT userid, MD5(UNIX_TIMESTAMP() + userid + RAND(UNIX_TIMESTAMP())),
           // guid FROM `susers` WHERE email = '$account' AND password = password('$password')";
        $query = "SELECT* FROM `susers` WHERE email = '$account' AND password = '$password' ";
    $result = mysqli_query($con, $query);
    if(!$result){
        echo('Error:'.mysqli_error($con));
        exit();
    }
    //echo ($account);
    //echo ($password);
    //$row = $result->fetch_row();
    //echo (mysqli_num_rows($result));
    // mysqli_query($con,
    // "INSERT INTO susers (userid, email, password, guid)
    // VALUES ('4', 'aaaaa@gmail.com', '696969', '23')");


    if (mysqli_num_rows($result))
    {
        $row = mysqli_fetch_row($result);
        // Update the user record

        // Set the cookie and redirect
        // setcookie( string name [, string value [, int expire [, string path
        // [, string domain [, bool secure]]]]])
        // Setting cookie expire date, 6 hours from now
        $cookieexpiry = (time() + 21600);
        setcookie("session_id", $row[1], $cookieexpiry);

        if (empty($refer) || !$refer)
        {
            $refer = 'index.php';
        }

        header('Location: '. $refer);
    }
}
?>