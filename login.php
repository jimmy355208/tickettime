<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ticket time 微日記</title>
<link rel="stylesheet" href="style.css">
<h1 ALIGN="left"><IMG SRC="logo.jpg" ALIGN="left" width="65" height="36"><a href="login.php">Ticket Time 微日記</a></h1>

<? //把SESSION中的變數值存成本頁專用的變數值
   $userID = $_SESSION['userID'];
   $name = $_SESSION['name'];
   $logout = $_SESSION['logout'];
   session_destroy();//清除所有SESSION值
?>
	<? if($userID==""){ //判斷是否有登入並授權，有授權的話userID會是一串數字 ?>
       <h5 align="right"><img src="fb.gif" align="top"><a href="fblogin.php">Facebook登入</a></h5>
        <!-- 連到fblogin去做取得授權跟認證的動作 -->
    <? }else{ ?>
       <h5 align="right">hello,<? echo $name; ?><img src="https://graph.facebook.com/<?php echo $userID; ?>/picture"/> 您好 | <a href="<? echo $logout;?>">登出</a></h5>

    <? }?>  
    
</head>

<body>

    <table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="21"><img src="bg_lift_top.png" width="21" height="20" /></td>
    <td width="1057" background="bg_top.png"><a name="top" id="top"></a></td>
    <td width="22"><img src="bg_right_top.png" width="21" height="20" /></td>
  </tr>
    <td background="bg_lift.png">&nbsp;</td>
    <td align="left" nowrap="nowrap" bgcolor="#FFFFFF">

<form method="post" action="calculate.php">

    
    
    <TABLE BORDER CELLPADDING=3 align="right"> 
    <TR>
    <Td><a href="login.php">關於Ticket Time</a> </Td>
    <Td><a href="how_use.php">使用流程介紹</a></Td>
    <Td> 開始製作 </TD>
    <Td> 我的作品集 </TD>
    <Td> 團隊介紹 </TD>
    </TR>
    </TABLE>
    </br> 
    </br>
    </br>
    

   <fieldset>
        <div id="container">

        
        </div>
   </fieldset>
<br>
<br>
  <fieldset>
        <legend><h4>關於ticket time</h4></legend> 
         <span>喜歡用Facebook紀錄生活的點點滴滴嗎？</span><p>
             
             想不想留下一點紀念呢！或是想為自己的生活作個總結呢？<br>
             挑選自己在Facebook上的照片貼文，再依照個人喜好進行美編和排版<br>
             單幾個步驟，就能完成專屬於自己的Ticket Time微日記歐！<br>
             快來使用我們的服務吧！</font>
  </fieldset><br> 
   </td>
    <td background="bg_right.png">&nbsp;</td>
  </tr>
  <tr>
    <td><img src="bg_lift_down.png" width="21" height="20" /></td>
    <td background="bg_down.png">&nbsp;</td>
    <td><img src="bg_right_down.png" width="21" height="20" /></td>
  </tr>
</table>
</body>
</html>