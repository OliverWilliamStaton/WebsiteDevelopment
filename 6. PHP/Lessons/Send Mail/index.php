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
	
		$emailTo="oliver.william.staton@gmail.com";
		$subject="I hope this works";
		$body="I think you're great";
		$header="From: fake@gmail.com";
		
		if(mail($emailTo, $subject, $body, $header))
		{
			echo "Mail sent successfully";
		}
		else
		{
			echo "Mail not sent successfully";
		}
		
	?>

</body>
</html>

</div>
</body>
</html>
