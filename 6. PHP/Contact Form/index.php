<?php
		
	if($_POST["submit"])
	{		
		// From 
		if(!$_POST["from"])
		{
			$error = $error."<br/>FORM section incomplete";
		}
		
		// To
		if(!$_POST["to"])
		{
			$error = $error."<br/>TO section incomplete";
		}
		
		// Subject
		if(!$_POST["subject"])
		{
			$error = $error."<br/>SUBJECT section incomplete";
		}
		
		// Body
		if(!$_POST["body"])
		{
			$error = $error."<br/>BODY section incomplete";
		}
		
		if($error)
		{
			$result = '<div class="alert alert-danger"><strong>There were error(s) in your form: </strong>'.$error.'</div>';
		}
		else		
		{
			$emailTo=$_POST["to"];
			$subject=$_POST["subject"];
			$body=$_POST["body"];
			$header="From: ".$_POST["from"];
			
			if(mail($emailTo, $subject, $body, $header))
			{
				echo "Mail sent successfully";
			}
			else
			{
				echo "Mail not sent successfully";
			}
		}
	}
	
?>

<!doctype html>
<html>
<head>
    <title>Contact Form</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
bootstrap-theme.min.css">

	<style>
	
		.emailForm {
			border:1px solid grey;
			border-radius:10px;
			padding:10px 10px;	
		}
		
		.mainBody {
			margin:10px 10px;
		}
	
	</style>

</head>

<body class="mainBody">
	
	<div class="container">
	
		<div class="row">
			
			<div class="col-md-6 col-md-offset-3 emailForm">
			
				<center><h1>My Email Form</h1></center>
				
				<?php echo $result; ?>
	
				<center><p>Get in touch with me!</p></center>
	
				<form method="post">
				
					<div class="form-group">
				
						<label for="from">From:</label>
						<input class="form-control" name="from" type="text" placeholder="Your name..."/>
					</div>
											
					<div class="form-group">
						<label for="to">To:</label>
						<input name="to" type="text" class="form-control" placeholder="Please enter a valid email address..."/>
					</div>
										
					<div class="form-group">	
						<label for="subject">Subject</label>
						<input name="subject" type="text" class="form-control"/>
					</div>
					
					<div class="form-group">	
						<label for="body">Body</label>
						<textarea name="body" type="text" class="form-control"></textarea>
					</div>
											
					<center><input type="submit" name="submit" value="Send Email" class="btn btn-success btn-lg"/></center>
				</form>
			</div>
		</div>
	</div>
	
	<!-- Latest compiled and minified JavaScript for Bootstrap -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></
	script>

</body>
</html>
