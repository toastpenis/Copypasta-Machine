<html>
<head>
<title>Operation Celebration's CopyPasta Machine!</title>
<style type="text/css">
#inputtext	{
		border: solid #000000 2px;
		color: #000000;
		font-weight: bold;
		scrolling: none;
		font-family: Arial;
		background-image: url('uploads/guyfawkesmask-thumb.gif');
		background-repeat:no-repeat;
		background-position:right top;
		margin-right: 0px;
		text-align: center;
		}
</style>
</head>
<body>
<form action="pdf.php">
<input type="radio" name="inputmethod" value="template" selected="selected"> <b>Fill in this template</b>:<br />
Location: <input type="text" name="location"><br />
Date/time: <input type="text" name="date"><br />
<input type="radio" name="inputmethod" value="textarea"> <b>Or write your own</b>: <small><i>No more than 7 lines</i></small><br />
<textarea name="inputtext" id="inputtext" rows="7" cols="49">A Protest in Defense of WikiLeaks and Free Expression!</textarea><br />
<input type="submit" value="submit [Returns a PDF]" />
</form>
</body>
</html>
