<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="sms" name="sms" method="post" action="./sendSMS.php">
<table width="400">
  <tr>
    <td align="right" valign="top">From:</td>
    <td align="left"><input name="from" type="text" id="from" size="30" /></td>
  </tr>
  <tr>
    <td align="right" valign="top">To:</td>
    <td align="left"><input name="to" type="text" id="to" size="30" /></td>
  </tr>
  <tr>
    <td align="right" valign="top">Subject:</td>
    <td align="left"><input name="subject" type="text" id="subject" size="30" /></td>
  </tr>
  <tr>
    <td align="right" valign="top">Carrier:</td>
    <td align="left"><select name="carrier" id="carrier">
      <option value="verizon">Verizon</option>
      <option value="tmobile">T-Mobile</option>
	  <option value="sprint">Sprint</option>
	  <option value="att">AT&amp;T</option>
	  <option value="virgin">Virgin Mobile</option>
    </select></td>
  </tr>
  <tr>
    <td align="right" valign="top">Message:</td>
    <td align="left"><textarea name="message" cols="40" rows="5" id="message"></textarea></td>
  </tr>
  <tr>
    <td colspan="2" align="right"><input type="submit" name="Submit" value="Submit" /></td>
    </tr>
</table>
</form>
</body>
</html>