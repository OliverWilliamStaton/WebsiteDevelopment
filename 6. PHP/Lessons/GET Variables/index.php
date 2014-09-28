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
	
		// Check to see if submit has been clicked
		if($_GET["submit"])
		{
			// Returns true if name has an element
			if($_GET["name"])
			{
				// Display name
				echo "Your name is ".$_GET["name"]."!";
			}
			else 
			{
				// Display error message
				echo "Please enter your name.";	
			}
		}
	
	?>

	<form>
	
		<label for="name">Name</label>
		<input name="name" type="text"/>
		<input type="submit" name="submit" value="Submit Your Name"/>
			
	</form>

</body>
</html>

</div>
</body>
</html>
