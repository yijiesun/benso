<HTML><HEAD><TITLE>benso</TITLE>
<SCRIPT LANGUAGE="JavaScript">
</SCRIPT>
<?php
$hl=$_GET['hl'];
$q=$_GET['q'];
$num=$_GET['num'];
$start=$_GET['start'];?>
<FRAMESET rows=41,* 
frameSpacing=0 frameBorder=0 border=0 bordercolor="#3E77B3">
  <FRAME border=0 name=poptoolsbar 
frameSpacing=0 src="head.php?q=<?php echo urlencode($q);?>&start=<?php echo $start;?>&num=<?php echo $num;?>" frameBorder=NO 
scrolling=no>
<FRAMESET cols=50%,11,* bordercolor="#3E77B3" id=myFrame>
  <FRAME class=a src="https://seeres.com/search?q=<?php echo $q;?>" 
name=popforum bordercolor="#3E77B3" target="right">
  <FRAME src="middle.htm" name=midFrame 
frameBorder=0 scrolling=no noResize bordercolor="#3E77B3">
    <FRAME 
src="http://www.baidu.com/s?pn=<?php echo $start;?>&wd=<?php echo urlencode($q);?>" name=popmain bordercolor="#3E77B3">
  </FRAMESET><NOFRAMES></NOFRAMES></FRAMESET>
<DIV style="DISPLAY: none">
<A href="https://github.com/yijiesun">syj</A>
<A href="https://github.com/yijiesun" >syj</A>
</DIV></HTML>
