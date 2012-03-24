<?php require('includes/application_top.php'); ?>
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title></title>
<style type="text/css">
body {backgorund-color:#FFFFFF;}
body, td, div {font-family: verdana, arial, sans-serif; font-size:14px;}
</style>
</head>
<body onload="document.twocoprocessform.submit()">
<form name="twocoprocessform" method="POST" action="<?php echo (($request_type == 'SSL') ? HTTPS_SERVER : HTTP_SERVER) . DIR_WS_CATALOG . 'checkout_process.php'; ?>">
<table cellpadding="0" width="100%" height="100%" cellspacing="0">
<tr>
<td align="middle" style="height:100%; vertical-align:middle;">
<?php 
foreach ($_REQUEST as $key => $val)
{
print "<input type=\"hidden\" name=\"$key\" value=\"$val\">\n";
}
//$currency="on";
?>
Thank you... redirecting to <?php echo STORE_NAME; ?>;<br><br>If<br>If the page fails to redirect click <input type="submit" value="here">
</td>
</tr>
</table>
</form>
</body>
</html>