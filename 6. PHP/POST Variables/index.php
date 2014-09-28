<!doctype html>
<html>
<head>
    <title>Sending Mail</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  
</head>

<body>

	<?php
	
		$names = array("Oliver", "Soumya", "Eli");
			
		$known = false;
		
		if($_POST["submit"])
		{
			if($_POST["name"])
			{
				foreach($names as $name)
				{
					if($_POST["name"] == $name)
					{
						$known = true;
						echo "Hello ".$name;
					}	
				}
				if(!$known)
				{
					echo "I don't know you ".$_POST["name"];
				}
			}
			else
			{
				echo "Please enter your name";
			}
		}
	
	?>

	<form method="post">
	
		<label for="name">Name</label>
		<input name="name" type="text"/>
		<input type="submit" name="submit" value="Submit Your Name"/>
			
	</form>

</body>
</html>

</div>
</body>
</html>
