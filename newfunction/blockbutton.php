<?php session_start();
$cookban = $_COOKIE['ban'];
if(empty($cookban)){ $cookban = $_SESSION['ban'];}
$tgcl = $cookban-time();
if($tgcl<='0'){ $tgcl=''; $cookban = '';}

function noidung($n){
	return '<div class="list1">'.$n.'</div>';
}
if(isset($_GET['ok']))
{
	setcookie("ban",time()+30,time()+30);$_SESSION['ban']=time()+30;
	echo header("Location: blockbutton.php");
}
echo '<div class="list1">';
echo '<form method="get" action="">
			Nhập Code:<br/>
			<input type="text" name="fine"/><br/>
		'.(empty($cookban) ? '<input type="submit" name="ok"  value="Đồng ý"/>':'Xin chờ '.$tgcl.' để thử lại!' );
		echo '</form></div>';
?>