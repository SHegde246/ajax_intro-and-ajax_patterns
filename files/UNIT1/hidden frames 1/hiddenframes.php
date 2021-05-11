<html>
<script>
<?php

extract($_POST);
if($uid=="sneha" || $uid=="siri")
{
	echo "parent.setstat('$uid; USN already taken');";
}
else
{
	echo "parent.setstat('$uid; USN is available');";
}

?>
</script>
<body>
</html>