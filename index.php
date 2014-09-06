<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP by commiting.</title>
</head>
<body>

<div class="functions">
	
	<?php 

		$files = scandir('./functions');
		sort($files); // this does the sorting
	?>

		<h2><?php echo "Functions <br />"; ?></h2>

		<?php  
			foreach($files as $file)
			{
				if ($file != ".") 
				{
					if ($file != "..") 
					{
						echo'<a href="'.$file.'">'.$file.'</a>';
						echo "<br />";				
					}
				} 
			}	

	?>
</div>
</body>
</html>