<form action="" method="post">
	<input type="number" name="no" placeholder="Enter Number"><br><br>
	<input type="submit" name="sb" value="For Loop"><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$n=$_POST['no'];
	for($i=0; $i<=$n; $i+=2)
	{
		ECHO $i."<br>";
	}
}
?>