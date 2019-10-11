<HTML>
<HEAD>
<TITLE>百度google一起搜工具</TITLE>
<!--程序作者:松树,QQ:820847036-->
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<style type="text/css">
BODY {
	MARGIN: 0px;
	background-color: #EEEEEE;
}
TD {
	FONT-SIZE: 9pt; FONT-FAMILY: SimSun
}

.style2 {color: #000000}
a:active    {COLOR: #000000; text-decoration:underline}
a:link       {COLOR: #000000; text-decoration:underline}
a:visited       {COLOR: #000000; text-decoration:underline}
a:hover       {COLOR: #000000; text-decoration:underline}
-->
</style></HEAD>
<BODY>
<?php
$hl=$_GET['hl'];
$q=$_GET['q'];
$num=$_GET['num'];
$start=$_GET['start'];

if(empty($start)){
$start=$_GET['num'];
$start=(int)$start;}
elseif($start<=0){
$start=0;}
else{
$start=(int)$start;}
?>

 
 <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0 background=images/bg_toolbar.gif>
      
        <TR>
          <TD colspan="2" vAlign=top style="PADDING-LEFT: 10px; COLOR: #335997" height="2"></TD>
        </TR>
        <TR>
          <TD height="27" vAlign=top style="PADDING-LEFT: 10px;PADDING-TOP: 10px; COLOR: #335997"><span style="PADDING-LEFT: 10px; COLOR: #335997"><a href="default.htm" target=_parent><img src="images/baidu_google.gif" border="0" valign="middle"></a></span></TD>
          <TD vAlign=top style="PADDING-LEFT: 10px; COLOR: #335997" nowrap><SPAN 
            style="FONT-WEIGHT: bold; COLOR: #000000">
			
            <form action="search.php" method="get" name="f" target=_parent>
<p style="margin: 0px; padding: 0px;">  <a href="default.htm" target="_top"><span class="style2">回首页</span></a>&nbsp;<a href="http://www.google.com/search?q=<?php echo $q;?>&start=<?php if(!empty($_GET['num'])){echo $num;}else{echo 0;}?>" target="_blank"><span class="style2">展开Google</span></a>&nbsp;<a href="http://www.baidu.com/s?ie=gb2312&word=<?php echo $q;?>&pn=<?php if($_GET['num']!=""){echo $num;}else{echo 0;}?>" target="_blank"><span class="style2">展开百度</span></a></font>&nbsp;&nbsp;
    <input size="30" name="q" type="text" value=<?php echo urldecode($q);?>>
	<select name="num">
	<option value="10" <?php $num=(int)$num; if($num==10){echo 'selected';}?>>每页显示10条</option>
	<option value="20" <?php if($num==20){echo 'selected';}?>>每页显示20条</option>
	<option value="50" <?php if($num==50){echo 'selected';}?>>每页显示50条</option>
	<option value="100" <?php if($num==100){echo 'selected';}?>>每页100条</option>
	</select>
	&nbsp;
	<input value="搜索" type="submit">&nbsp;
	<span style="CURSOR: hand" onClick="window.external.addFavorite('http://','百度谷歌搜索区别')" title="百度谷歌搜索区别">收藏本站</span>
	<?php if(!empty($start)){?>
	<?php if($start>0){?>
	<a href="search.php?q=<?php echo $q=urlencode($_GET['q']);?>&start=
	<?php if(!empty($start) || (int)$start>0){echo $start-(int)$num;}?>&num=<?php if(!empty($num)){echo $num;}else{echo 20;}?>" target="_top">上一页</a>
	<?php }?>
	<?php }?>
	&nbsp;<a href="search.php?q=<?php echo $q=urlencode($_GET['q']);?>&start=<?php if(!empty($start)){echo $start+$num;}else{$start;}?>&num=<?php if(!empty($num)){echo $num;}else{echo 20;}?>" target="_top">下一页</a>
</center>
            </form>
</TD></TR></TABLE> 
