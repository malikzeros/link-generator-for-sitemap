<?php
$keyword=explode("\n",$_POST['keyword']);
$domain=explode("\n",$_POST['domain']);
foreach($keyword as $row)
{
	foreach($domain as $field)
	{
		$keyword_replace=str_replace(" ", '-', $row);
		$domain_replace=$field.$keyword_replace."\n";
		$result[]=str_replace(array("\n\r","\r"), '', $domain_replace);
	}
}
?>
<form method=post action="<?php echo $_SERVER['PHP_SELF'];?>">
<textarea name=keyword rows=10 cols=100>
</textarea><br>
<textarea name=domain rows=10 cols=100>
</textarea><br>
<input type=submit value=generate><br>
<textarea name=result rows=10 cols=100>
<?php
foreach($result as $row)
{
	echo $row;
}
?>
</textarea>
</form>