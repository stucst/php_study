<?php
include_once('admin_global.php');
 if(!empty($_POST[username])&& !empty($_POST[password])) $db->Get_user_login($_POST[username],$_POST[password]);
?>
<html><head><meta http-equiv='Content-Type' content='text/html; charset=gb2312'>
<meta name='Author' content='Alan'>
<link rev=MADE href='mailto:haowubai@hotmail.com'><title>��̨����</title>
<link rel='stylesheet' type='text/css' href='images/private.css'>
<script> if(self!=top){ window.open(self.location,'_top'); } </script>
</head><body>
	<br><br><br>
	  <form action="" method="post">
	<table border=0 cellspacing=1 align=center class=form>
	<tr>
		<th colspan="2">�û���¼</th>
	</tr>
     	  <tr>
  <td align="right">��¼�û�:</td>
  <td><input type="text" name="username" value="" size="20" maxlength="40"/>  </td>
  </tr>
       	  <tr>
  <td align="right">��¼����:</td>
  <td><input type="password" name="password" value="" size="20" maxlength="40"/>  </td>
  </tr>
  <tr>
    <td colspan="2" align="center" height='30'>
  <input type="submit" name="update" value=" ��¼ "/>

  </td>  </form>
    </tr>
	</table>
</body></html>






