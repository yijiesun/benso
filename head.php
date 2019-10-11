<HTML>
<HEAD>
<TITLE>benso</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
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
          <TD height="27" vAlign=top style="PADDING-LEFT: 10px;PADDING-TOP: 10px; COLOR: #335997"><span style="PADDING-LEFT: 10px; COLOR: #335997"><a href="index.htm" target=_parent><img src="images/baidu_google.gif" border="0" valign="middle"></a></span></TD>
          <TD vAlign=top style="PADDING-LEFT: 10px; COLOR: #335997" nowrap><SPAN 
            style="FONT-WEIGHT: bold; COLOR: #000000">
			
            <form action="search.php" method="get" name="f" target=_parent>
<p style="margin: 0px; padding: 0px;">  <a href="index.htm" target="_top"><span class="style2">home</span></a>&nbsp;<a href="https://seeres.com/search?q=<?php echo $q;?>" target="_blank"><span class="style2">Google</span></a>&nbsp;<a href="https://www.baidu.com/s?wd=<?php echo $q;?>" target="_blank"><span class="style2">baidu</span></a></font>&nbsp;&nbsp;
    <input size="30" name="q" type="text" value=<?php echo urldecode($q);?>>
	&nbsp;
	<input value="GO" type="submit">&nbsp;
	<?php if(!empty($start)){?>
	<?php if($start>0){?>
	<?php }?>
	<?php }?>
</center>
            </form>
</TD></TR></TABLE> 
