<?php
					require('config.php');
					$account = $_COOKIE['ac'];
					$sport = $_POST['sport'];
					$time = $_POST['time'];
					$link=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
					if(!$link){
						echo mysqli_error($link);
					}
					mysqli_query($link,"SET NAMES 'utf8'");
					$result=mysqli_query($link,"CREATE TABLE schedule
					(name varchar(10),sport varchar(50),time varchar(50));");
					if($result){
						echo "<meta http-equiv = 'refresh' content = '0;url=index.php#experience' >
						<script language='javascript'>
							alert('創立完成');
						</script>";
					}else{
						echo "<meta http-equiv = 'refresh' content = '0;url=index.php#experience' >
						<script language='javascript'>
							alert('創立完成');
						</script>";
                    $insert=mysqli_query($link,"insert into `schedule` (`name`, `sport`, `time`)
                    VALUES ('$account', '$sport', '$time')");
					}

?>