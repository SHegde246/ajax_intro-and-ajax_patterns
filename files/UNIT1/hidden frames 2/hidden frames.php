<html>
<script>
<?php
extract($_GET);
$file=fopen("electives.txt","r");
while($line=fgets($file))
{
	$modline=trim($line); //makes sure we don't get unwanted values
	$arr=explode(";",$modline);  //converts to array, splits at first parameter

	$found=false;
	if($dept==$arr[0])
	{
		$found=true;
		break;
	}
}

if($found==true)
{
	echo "parent.obj.populateElectives('$modline');";
}

?>
</script>
</html>
	