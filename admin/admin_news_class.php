<?php
//分类
include_once ('admin_global.php');

$r=$db->Get_user_shell_check($uid, $shell);

if(isset($_POST[into_class])){
  $db->query("INSERT INTO `news_php100`.`p_newclass` (`id`, `f_id`, `name`, `keyword`, `remark`) VALUES ('', '$_POST[f_id]', '$_POST[name]', '', '')");
  $db->Get_admin_msg("admin_news_class.php","已经成功添加");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>后台管理</TITLE>
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<META content=Alan name=Author><LINK rev=MADE 
href="mailto:haowubai@hotmail.com"><LINK href="images/private.css" 
type=text/css rel=stylesheet>
<META content="MSHTML 6.00.6000.16890" name=GENERATOR></HEAD>
<BODY>
<TABLE class=navi cellSpacing=1 align=center border=0>
  <TBODY>
  <TR>

    <TH>后台>>新闻分类</TH></TR></TBODY></TABLE><BR>
	
	<table border=0 cellspacing=1 align=center class=form>
	<tr>
		<th colspan="2">添加分类</th>
	</tr>
      <form action=" " method="post" >
     	  <tr>

       <td colspan="2" align="center" height='30'>
       <select name="f_id">
        <option value="0">添加大类</option>
        <?php
        $query=$db->findall("p_newclass where f_id=0");
        while($row=$db->fetch_array($query)){
          echo " <option value=\"$row[id]\">$row[name]</option>";
        }
        ?>
      </select>
      <input type="text" name="name" value=" "  >
      <input type="submit" name="into_class" value=" 添加分类 "/>

      </td>
      </form>
      </tr>
	</table>
	
	</BODY></HTML>
