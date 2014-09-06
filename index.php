<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP by commiting.</title>
	<charset="utf-8" />
</head>
<body>

<div class="functions">
	
	<?php 

		$files = scandir('./functions');
		sort($files); //sorting
	?>

		<div id="title"><h2><?php echo "Functions <br />"; ?></h2></div>

		<?php  
			$itemNumber = 0;
			foreach($files as $file)
			{					
				if ($file != ".") 
				{
					if ($file != "..") 
					{
		?>		
		<ul>	
		<?php
			$itemNumber = $itemNumber + 1;
		 	echo'<li id="listItem-'.$itemNumber.'"><a href="'.$file.'">'.$file.'</a> </li>' . '<br />';				
					}
				} 
			} 
		?>
		</ul>
</div>
</body>
</html>