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
	
		html, body {
			height:100%;
		}
	
		.container {
			padding-top:90px;
			width:100%;
			height:100%;
			background-image: url('images/Landscape.jpg');
			background-position:center top;
			background-size:cover;
			background-repeat:no-repeat;
		}
		
		.center {
			text-align:center;
		}
		
		.orange {
			color:black;
		}
		
		h1 {
			font-family:"Comic Sans MS", cursive, sans-serif;
		}
		
		p {
			font-family:"Comic Sans MS", cursive, sans-serif;
			font-size:1.1em;
			padding-top:15px;
			padding-bottom:15px;
		}
		
		button {
			margin-top:20px;
		}
		
		.alert {
			margin-top:20px;
			display:none;
		}
		
	</style>

</head>

<body>
		
	<div class="container">
	
		<div class="row">
		
			<div class="col-md-6 col-md-offset-3 center">
			
				<h1 class="orange" class="center">Weather Man</h1>
				
				<p class="orange" class="center" class="lead">Enter your city below to get a weather forecast.</p>
				
				<form>
					
					<div class="form-group">
						<input id="city" class="center" style="border-radius: 5px; width:300px" type="text" class="form-control" name="city" placeholder="Example: New York, London, Paris ..."/>
					</div>
					
					<button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>					
				
				</form>
				
				<div id="success" class="alert alert-success">
					Success!
				</div>

				<div id="fail" class="alert alert-danger">
					Could not find weather data for that city. Please try again.
				</div>

				<div id="noCity" class="alert alert-danger">
					Please enter a city!
				</div>
			
			</div>
		
		</div>
	
	</div>
	
	<!-- Latest jQuery -->
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>	
	
	<script>
	
		$("#findMyWeather").click(function(event) {
					
			event.preventDefault();
			
			$(".alert").hide();
			
			if($("#city").val() != "") {
						
				$.get("scraper.php?city=" + $("#city").val(), function( data ) {
				
					if(data == "") {
						$("#fail").fadein();
					}	
					else {
						$("#success").html(data).fadeIn();
					}			
				});
			
			}
			else {
				$("#noCity").fadeIn();
			}
			
		});
	
	</script>

</body>
</html>
