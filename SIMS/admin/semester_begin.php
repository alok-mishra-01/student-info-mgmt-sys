<? 
include "/opt/lampp/htdocs/session.php";
require "/opt/lampp/htdocs/check.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
		
		<title>Administrators</title><meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="Alok Mishra" />
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<link rel="stylesheet" title="Normal" type="text/css" media="screen" href="./styles/screen.css" /></head>

	<body>
<form name="myform" action="session_check.php" method="POST">
		<div id="main">
			<div id="header">
				<h1>Administrator Area</h1>
			</div>
		    <p>&nbsp;</p>

<script language="JavaScript" src="calendar3.js"></script>


<tr bgcolor='#f1f1f1'><td ><font face='Verdana' size='2' >&nbsp;Select the beginning date of the session (yyyy-mm-dd) : </td>
<td  ><input type=text name=begindate value=''></td></tr>
<a href="javascript:cal9.popup();"><img src="/img/cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the date"></a><br><br><br>
<tr bgcolor='#f1f1f1'><td ><font face='Verdana' size='2' >&nbsp;Select the end date of the session (yyyy-mm-dd) : </td>
<td  ><input type=text name=enddate value=''></td></tr>
<a href="javascript:cal10.popup();"><img src="/img/cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the date"></a><br><br><br>
<tr bgcolor='#f1f1f1'><td ><font face='Verdana' size='2' >&nbsp;Select if its an even or odd semester: </td>
<td  ><select name="evenodd">
<option value="even">Even</option>
<option value="odd">Odd</option>
</select></td></tr>
</form>
<script language="JavaScript">
			

				var cal9 = new calendar3(document.forms['myform'].elements['begindate']);
				cal9.year_scroll = true;
				cal9.time_comp = false;
                               
                                var cal10 = new calendar3(document.forms['myform'].elements['enddate']);
				cal9.year_scroll = true;
				cal9.time_comp = false;
				
			
			</script>

<br><br>
<tr>
<td align = "center"><input type = "Submit" name = "submitted" value = "submit"></td>
</tr>
 <input type="button" name="goBack" value="Go Back" onclick="history.back(1)">
                <p>&nbsp; </p>
</p>
				
			<br /><div id="footer">
				<p>
					Designed by <a href="http://www.aloktherocker.blogspot.com/">Alok Mishra</a><br />For MIT,Manipal.
				</p>
			</div>
		</div>
	</body></html>


