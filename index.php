<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP by commiting.</title>
	<meta charset="utf-8" />
	</head>
<body>

<div class="functions">
	
	<?php 

		$domain = "http://localhost/phpBasic";
		$files = scandir('functions');
		sort($files); //sorting
	?>

		<div id="title"><h2><?php echo "Functions <br />"; ?></h2></div>
		<ul>
		<?php  
			$itemNumber = 0;
			foreach($files as $file)
			{					
				if ($file != ".") 
				{
					if ($file != "..") 
					{
		?>		
			
		<?php
			$itemNumber = $itemNumber + 1;
		 	echo'<li id="listItem-'.$itemNumber.'"><a href="/phpBasic/functions/'.$file.'">'.$file.'</a> </li>' . '<br />';				
					}
				} 
			} 
		?>
		</ul>
</div>
</body>
</html>