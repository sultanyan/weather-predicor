<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Weather Predictor</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="page-header">
					<div class="head">
						<h1>Weather Predictor <br><small>Type the name of your city and know the weather...</small></h1>
					</div>
				</div>

				<form class="form-group">
				    <input type="text" name="city" class="form-control" id="city" placeholder="Eg. Yerevan, Tehran, New York, Baghdad, London...">
				  	<button type="submit" id="findMyWeather" name="submit" class="btn btn-lg btn-success">Find my weather</button>
				</form>

				<div class="alert alert-success" role="alert">
				    <strong>Well done!</strong> You successfully read this important alert message.
				</div>

			</div>
		</div>
	</div>

	<script   src="https://code.jquery.com/jquery-3.1.0.js"   integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="   crossorigin="anonymous"></script>
		<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script>
		$('#findMyWeather').click(function(event){
			event.preventDefault();

			if ($('#city').val()!="") {

				$.get('scraper.php?city='+$('#city').val(), function(data){
					$('.alert').html(data).fadeIn('slow')
					if (data=='') {
						$('.alert').html('Sorry we could\'nt find the city that you typed.').fadeIn('slow')
					}
				})
			}else{
				$('.alert').html('Please enter the name of the city').fadeIn('slow')
			}
		})
	</script>
</body>
</html>